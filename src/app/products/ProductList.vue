<template>
    <div id="searchResult">
        <div  class="container">
            <div class="row">
                <product-row :product="p" v-for="p in products" :clicked="goToDetails.bind(this, p)"></product-row>
            </div>
            <div class="row">
               <pager :pages="pages" :active-page="$route.query.offset" route-name="products" :query="$route.query"></pager>
            </div>
        </div>
    </div>
</template>

<script>
    import ProductRow from './ProductRow.vue';
    import Pager from './Pager.vue';

    export default {
        name: 'products',
        created () {
            this.fetchData();
        },
        watch: {
            '$route': 'fetchData'
        },
        methods: {
            goToDetails (p) {
                this.$root._router.push({ name: 'product', params: {productId: p}});
            },
            fetchData () {
                const query = Object.assign({ search: '', offset: 0, size: 15}, this.$route.query);
                this.$http.get('/server/products.php', {params: query}).then(function(response) {
                    this.products = response.body;
                    if (this.products.length > 0) {
                        this.total = Math.ceil(this.products[0].total / query.size);
                        this.pages = Array.from(Array(this.total),(x,i) => i)
                    }
                });
            }
        },
        data: function() { 
            return {
                products: [],
                total: 0
            }; 
        },
        components: {
            ProductRow,
            Pager
        }
    }
</script>