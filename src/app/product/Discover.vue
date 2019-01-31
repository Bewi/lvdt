<template>
    <div id="discover">
        <div class="container">
            <h1>Découvrez d'autres produits</h1>
            <loader v-if="pending"></loader>
            <div class="row" v-if="!pending">
                <router-link class="item col-xs-12 col-sm-2 col-md-2 col-lg-2"
                    :to="{ name:'product', params: { productId: product.id} }" v-for="product in relatedProducts">
                    
                    <object class="thumb" :data="`./images/items/${product.image}`" type="image/png">
                        <img class="thumb" src="./images/no-image.png" :alt="product.nom" />
                    </object>
                    <div class="item-details">
                        <h3>{{product.nom}}</h3>
                        <a class="details" href="#">Détails <img src="images/detail.svg" /></a>
                    </div>
                </router-link>               
            </div>
        </div>
    </div>
</template>
<script>
    import Loader from '../layout/Loader.vue';

    export default {
        name: 'discover',
        props: ['relatedProducts', 'pending'],
        components: {
            Loader
        }
    }
</script>