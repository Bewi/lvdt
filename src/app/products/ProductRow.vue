<template>
    <div class="item col-xs-10 col-sm-5 col-md-2 col-lg-2" @click="clicked">
        <img class="thumb" :src="product.image ? `./images/items/${product.image}` : `./images/no-image.png`" alt="" />
        <div class="item-details">
            <h3>{{product.nom}}</h3>
            <div class="prices row">
                <span class="col-xs-5 col-sm-5 col-md-5 col-lg-5" v-if="product.tar50"> {{product.tar50 | euro}} /50gr</span>
                <span class="col-xs-5 col-sm-5 col-md-5 col-lg-5" v-if="product.tar100"> {{product.tar100 | euro}} /100gr</span>
                <span class="col-xs-5 col-sm-5 col-md-5 col-lg-5" v-if="product.tarpce"> {{product.tarpce | euro}} /unité</span>
            </div>
            <a class="details" href="#">Détails <img src="images/detail.svg" /></a>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Product',
        props: ['product', 'clicked']
    }
</script>