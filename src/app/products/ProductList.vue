<template>
    <div id="searchResult">
        <div  class="container">
            <div class="row">
                <product :item="p" v-for="p in products"></product>
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
    import Product from './Product.vue';

    export default {
        name: 'products',
        data: function() { 
            return {
            products: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]
        } },
        components: {
            Product
        }
    }

</script>