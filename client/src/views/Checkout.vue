<template>
    <div class="page-checkout">
        <div class="columns is-multiline">

            <div class="column is-12">
                <h1 class="title">Checkout</h1>
            </div>

            <div class="column is-12">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr v-for="item in cart.items" v-bind:key="item.product.product_id">
                            <td>{{ item.product.product_name }}</td>
                            <td>{{ item.product.price }}</td>
                            <td>{{ item.quantity }}</td>
                            <td>${{ getItemTotal(item).toFixed(2) }}</td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="2">Total</td>
                            <td>{{ cartTotalLength }}</td>
                            <td>${{ cartTotalPrice.toFixed(2) }}</td>
                        </tr>
                    </tfoot>

                </table>
            </div>


            <div class="column is-12">
                <h2 class="subtitle">Shipping details</h2>
                <p class="has-text-grey mb-4">* All fields are required</p>
               
                <div class="columns is-multiline">
                    
                    <div class="column is-6">
                        <div class="field">
                            <label>Name*</label>
                            <div class="control">
                                <input type="text" class="input" v-model="name">
                            </div>
                        </div>

                        <div class="field">
                            <label>E-mail*</label>  
                            <div class="control">
                                <input type="text" class="input" v-model="email">
                            </div>
                        </div>
                    </div>

                    <div class="column is-6">
                      <div class="field">
                        <label>Phone*</label>
                        <div class="control">
                          <input type="text" class="input" v-model="phone">
                        </div>
                      </div>
                      <div class="field">
                          <label>Address*</label>
                          <div class="control">
                              <textarea class="input" v-model="address"></textarea>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="notification is-danger mt-4" v-if="errors.length">
                    <p v-for="error in errors" v-bind:key="error">{{ error }}</p>
                </div>

                <template v-if="cartTotalLength">
                    <hr>
                    <button class="button is-dark" @click="submitForm">Pay</button>
                </template>

            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { toast } from 'bulma-toast'

export default {
    name: 'Checkout',
    data() {
        return { 
            cart: {
                items: []
            },
            name: '',
            email: '',
            phone: '',
            address: '',
            errors: []
        }
    },
    mounted() {
        document.title = 'Checkout | Ecommerce Store'
        this.cart = this.$store.state.cart
    },
    methods: {
        getItemTotal(item) {
            return item.quantity * item.product.price
        },
        submitForm() {
            this.errors = []

            if(this.name === '') {
                this.errors.push('The name field is required')
            }

          if(this.phone === '') {
            this.errors.push('The phone field is required')
          }

            if(this.email === '') {
                this.errors.push('The email field is required')
            }

            if(this.address === '') {
                this.errors.push('The address field is required')
            }

            // if has not errors
          const items = []

          for (let i = 0; i < this.cart.items.length; i++ ) {
            const item = this.cart.items[i]

            // order items
            const obj = {
              product: item.product.product_id,
              quantity: item.quantity,
              price: item.product.price * item.quantity
            }

            items.push(obj)
          }

          // order object
          const data = {
            'name': this.name,
            'phone': this.phone,
            'email': this.email,
            'address': this.address,
            'total': this.cartTotalPrice.toFixed(2),
            'items': items,
          }

          // ajax post request
          axios
              .post('/api/orders/checkout', data)
              .then(response => {
                this.$store.commit('clearCart')
                this.$router.push('/cart/success')
              })
              .catch(error => {
                this.errors.push('Something went wrong. Please try again')
              })

          this.$store.commit('setIsLoading', false)
        }

    },
    computed: {
        cartTotalPrice() {
            return this.cart.items.reduce((acc, currentValue) => {
                return acc += currentValue.product.price * currentValue.quantity
            }, 0)
        },
        cartTotalLength() {
            return this.cart.items.reduce((acc, currentValue) => {
                return acc += currentValue.quantity
            }, 0)
        }
    }
}
</script>