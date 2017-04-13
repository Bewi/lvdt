<template>
    <div id="searchResult">
        <div  class="container">
            <div class="row">
                <product-row :product="p" v-for="p in products" :clicked="goToDetails.bind(this, p)"></product-row>
            </div>
            <div class="row">
                <ul class="pager">
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import ProductRow from './ProductRow.vue';

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
                const query = Object.assign({ search: '', offset: 0, size: 10}, this.$route.query);
                this.$http.get('/server/products.php', {params: query}).then(function(response) {
                    this.products = response.body;
                    this.total = Math.ceil(this.products[0].total / query.size);
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
            ProductRow
        }
    }
</script>