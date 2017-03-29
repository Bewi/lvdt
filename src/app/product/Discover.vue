<template>
    <div id="discover">
        <div class="container">
            <h1>Découvrez d'autres produits</h1>
            <div class="row">
                <router-link :to="{ name:'product', params: { productId: 1} }" class="item col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <img class="thumb" src="./images/items/ACC_0335.jpg" alt="" />
                    <div class="item-details">
                        <h3>Camomille</h3>
                        <a class="details" href="#">Détails <img src="images/detail.svg" /></a>
                    </div>
                </router-link>
                <router-link :to="{ name:'product', params: { productId: 2} }" class="item col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <img class="thumb" src="./images/items/ACC_0347.jpg" alt="" />
                    <div class="item-details">
                        <h3>Camomille</h3>
                        <a class="details" href="#">Détails <img src="images/detail.svg" /></a>
                    </div>
                </router-link>
                <router-link :to="{ name:'product', params: { productId: 3} }" class="item col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <img class="thumb" src="./images/items/ACC_0953.jpg" alt="" />
                    <div class="item-details">
                        <h3>Camomille</h3>
                        <a class="details" href="#">Détails <img src="images/detail.svg" /></a>
                    </div>
                </router-link>
                <router-link :to="{ name:'product', params: { productId: 5} }" class="item col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <img class="thumb" src="./images/items/ACC_1143.jpg" alt="" />
                    <div class="item-details">
                        <h3>Camomille</h3>
                        <a class="details" href="#">Détails <img src="images/detail.svg" /></a>
                    </div>
                </router-link>
                <router-link :to="{ name:'product', params: { productId: 6} }" class="item col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <img class="thumb" src="./images/items/ACC_0745.jpg" alt="" />
                    <div class="item-details">
                        <h3>Camomille</h3>
                        <a class="details" href="#">Détails <img src="images/detail.svg" /></a>
                    </div>
                </router-link>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'discover'
    }
</script>