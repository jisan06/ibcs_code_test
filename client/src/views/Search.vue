<template>
    <div class="page-search">
        <div class="columns is-multiline">
            <div class="column is-12">
                <h1 class="title">Search</h1>
                <h2 class="is-size-5 has-text-grey">Search Term: "{{ query }}"</h2>
            </div>

            <ProductBox 
            v-for="product in products"
            v-bind:key="product.product_id"
            v-bind:product="product"/>
        </div>
    </div>
</template>


<script>
import axios from 'axios'
import ProductBox from '@/components/ProductBox'

export default {
    name: 'Search',
    components: {
        ProductBox
    },
    data() {
        return {
            products: [],
            query: '',

          search_query: null,
        }
    },
    mounted() {
        document.title = 'Search | Ecommerce Store'
        this.query = this.$route.query.search_query
      this.performSearch()
    },
    methods: {
        async performSearch() {
          console.log('get')
            this.$store.commit('setIsLoading', true) // push to vuex

            await axios
                  .post('/api/products/search/', {
                      'search_key': this.query
                  })
                  .then( response => {
                      this.products = response.data.products
                  })
                  .catch( error => {
                      console.log(error)
                  })
        }
    }
}
</script>