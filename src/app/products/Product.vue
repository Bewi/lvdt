<template>
    <div class="item col-xs-10 col-sm-5 col-md-2 col-lg-2">
        <img class="thumb" src="./images/items/ACC_0602.jpg" alt="" />
        <div class="item-details">
            <h3>Camomille</h3>
            <div class="prices row">
                <span class="col-xs-5 col-sm-5 col-md-5 col-lg-5">3,70€ /50gr</span>
                <span class="col-xs-5 col-sm-5 col-md-5 col-lg-5">5,70€ /100gr</span>
            </div>
            <div class="row">
                <span class="description col-lg-10">
                Thé noir de Chine keemun, à la bergamote.  Arôme de bergamote, avec zestes d'orange et pétales de bleuets. 
                </span>
            </div>
            <a class="details" href="#">Détails <img src="images/detail.svg" /></a>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Product',
        props: ['product']
    }
</script>