<template>
    <div>
        <product-description :product="product" :pending="productPending" v-show="product && !productPending"></product-description>
        <discover :relatedProducts="relatedProducts" :pending="relatedProductsPending" v-show="!productPending"></discover>
    </div>
</template>
<script>
    import ProductDescription from './ProductDescription.vue';
    import Discover from './Discover.vue';

    export default {
        name: 'ProductDetails',
        data() {
            return {
                product: null,
                relatedProducts: null,
                productPending: false,
                relatedProductsPending: true
            }
        },
        created() {
            this.fetchData();
        },
        watch: {
            '$route': 'fetchData'
        },
        methods: {
            fetchData () {
                this.productPending = true;
                this.relatedProductsPending = true;

                this.$http.get(`/server/product.php?productId=${this.$route.params.productId}`)
                    .then(response => {
                        this.product = response.body;
                        this.productPending = false;
                    }, err => {
                        // TODO handle error
                        console.error(err);
                        this.productPending = false;
                    });

                this.$http.get(`/server/related-products.php?productId=${this.$route.params.productId}`)
                    .then(response => {
                        this.relatedProducts = response.body;
                        this.relatedProductsPending = false;
                    }, err => {
                        // TODO handle error
                        console.error(err);
                        this.relatedProductsPending = false;
                    });
            }
        },
        components: {
            ProductDescription,
            Discover
        }
    } 
</script>