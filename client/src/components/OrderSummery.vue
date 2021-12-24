<template>
    <div class="box mb-4">
        <h3 class="is-size-5">Order #{{ order.order_id }}</h3>
        <h4 class="mb-2">Order Status: <b>{{ order.order_status }}</b></h4>

        <h4 class="is-size-5">Products</h4>

        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>

            <tbody>
                <tr v-for="item in order.details_order" v-bind:key="item.products.product_id">
                    <td>{{ item.products.product_name }}</td>
                    <td>{{ item.products.price }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>${{ getItemTotal(item).toFixed(2) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'OrderSummery',
    props: {
        order: Object
    },
    methods: {
        getItemTotal(item) {
            return item.quantity * item.products.price
        },
        orderTotalLength(order) {
            return order.items.reduce( (acc, currentVal) => {
                return acc += currentVal.quantity
            }, 0)
        }
    }
}
</script>