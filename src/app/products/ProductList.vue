<template>
    <div id="searchResult">
        <div  class="container">
            <div class="row" v-if="!pending">
                <product-row :product="p" v-for="p in products" :clicked="goToDetails.bind(this, p.id)"></product-row>
            </div>
            <div class="row" v-if="!pending">
               <pager :pages="pages" :active-page="$route.query.offset" route-name="products" :query="$route.query"></pager>
            </div>
            <loader v-if="pending"></loader>
        </div>
    </div>
</template>

<script>
    import ProductRow from './ProductRow.vue';
    import Pager from './Pager.vue';
    import Loader from '../layout/Loader.vue';

    export default {
        name: 'products',
        created () {
            this.fetchData();
        },
        watch: {
            '$route': 'fetchData'
        },
        methods: {
            goToDetails (productId) {
                this.$root._router.push({ name: 'product', params: {productId: productId}});
            },
            fetchData () {
                const query = Object.assign({ search: '', offset: 0, size: 15}, this.$route.query);

                this.pending = true;

                this.$http.get('/server/products.php', {params: query}).then(function(response) {
                    this.products = response.body;
                    if (this.products.length > 0) {
                        this.total = Math.ceil(this.products[0].total / query.size);
                        this.pages = Array.from(Array(this.total),(x,i) => i)
                    }

                    this.pending = false;
                });
            }
        },
        data: function() { 
            return {
                products: [],
                total: 0,
                pending: false
            }; 
        },
        components: {
            ProductRow,
            Pager,
            Loader
        }
    }
</script>