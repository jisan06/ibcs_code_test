<template>
    <div class="page-product">
        <div class="columns is-multiline">
            <div class="column is-9">
                <figure class="image mb-6">
                    <img :src=" 'http://localhost:8000/' + product.image" alt="">
                </figure>
                <h3 class="is-size-4">{{ product.product_name }}</h3>
                <p>{{ product.description }}</p>
            </div>
            
            <div class="column is-3">
                <h2 class="subtitle">Information</h2>
                <p class="is-size-6 has-text-grey">${{ product.price }}</p>

                <div class="field has-addons mt-6">
                    <div class="control">
                        <input type="number" class="input" min="1" v-model="quantity">
                    </div>
                    <div class="control">
                        <a class="button is-dark" @click="addToCart">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { toast } from 'bulma-toast'

export default {
    name: 'Product',
    data() {
        return {
            product: {},
            quantity: 1
        }
    },
    mounted() {
        this.getProduct()
    },
    methods: {
        async getProduct() {
            this.$store.commit('setIsLoading', true)
            const product_id = this.$route.params.id

            await axios.get(`/api/products/${product_id}`)
            .then(response => {
                this.product = response.data.product
                document.title = this.product.product_name + ' | Ecommerce Store'
            })
            .catch( error => {
            })

            this.$store.commit('setIsLoading', false)
        },
        addToCart() {
            if(isNaN(this.quantity) || this.quantity < 1) {
                this.quantity = 1 
            }

            const item = {
                product: this.product,
                quantity: this.quantity
            }
            this.$store.commit('addToCart', item)

            toast({
                message: 'The product was added to the cart',
                type: 'is-success',
                dismissible: true,
                pauseOnHover: true,
                duration: 2000,
                position: 'bottom-right'
            })
        }
    }
}
</script>

