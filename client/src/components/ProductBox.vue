<template>
    <div class="column is-3">
        <div class="box">
            <figure class="image mb-4">
                <img :src=" 'http://localhost:8000/' + product.image" class="product_image">
            </figure>

            <h3 class="is-size-4">{{ product.product_name }}</h3>
            <p class="is-size-6 has-text-grey">${{ product.price }}</p>

            <router-link :to="{ name: 'Product', params: {id: product.product_id}}" class="button is-dark mt-4">View Detail</router-link>

        </div>
    </div>
</template>

<script>
export default {
    name: 'ProductBox',
    props: { // receive product
        product: Object
    }
}
</script>

<style scoped>
  .image {
    margin-top: -1.25rem;
    margin-left: -1.25rem;
    margin-right: -1.25rem;
  }

  .product_image{
    max-height: 310px;
  }
</style>

