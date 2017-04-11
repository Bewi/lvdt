<template>
    <div>
        <product-description :product="product" v-if="product"></product-description>
        <discover :relatedProducts="relatedProducts"></discover>
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
                relatedProducts: null
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
                this.$http.get(`/server/product.php?productId=${this.$route.params.productId}`)
                    .then(response => {
                        this.product = response.body;
                    }, err => {
                        // TODO handle error
                        console.error(err);
                    });

                this.$http.get(`/server/related-products.php?productId=${this.$route.params.productId}`)
                    .then(response => {
                        this.relatedProducts = response.body;
                    }, err => {
                        // TODO handle error
                        console.error(err);
                    });
            }
        },
        components: {
            ProductDescription,
            Discover
        }
    } 
</script>