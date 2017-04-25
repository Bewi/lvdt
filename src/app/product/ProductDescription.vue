<template>
    <div id="product">
        <div class="container">
            <div class="row product-details">
                <loader v-if="pending"></loader>
                <div class="col-xs-10 col-sm-5 col-md-5 col-lg-4" v-if="!pending">
                    <object :data="`./images/items/${product.image}`" type="image/png">
                        <img src="./images/no-image.png" alt="">
                    </object>
                </div>
                <div class="col-xs-10 col-sm-5 col-md-5 col-lg-4" v-if="!pending">
                    <h2>{{product.nom}}</h2>
                    <span class="price half" v-if="product.tar50">{{product.tar50 | euro}} /50 grammes</span>
                    <span class="price half" v-if="product.tar100">{{product.tar100 | euro}} /100 grammes</span>
                    <span class="price" v-if="product.tarpce">{{product.tarpce | euro}} /unité</span>
                    <p class="description">{{product.description}}</p>
                    <div class="settings">
                        <div class="half">
                            <div class="property">
                                <h4>Grade</h4>
                                <span>{{product.gradeThe | empty}}</span>
                            </div>
                            <div class="property">
                                <h4>Moment de la journée</h4>
                                <span>{{product.typeConso | empty}}</span>
                            </div>
                            <div class="property">
                                <h4>Famille</h4>
                                <span>{{product.famille | empty}}</span>
                            </div>
                            <div class="property">
                                <h4>Pays d'origine</h4>
                                <span>{{product.paysOrigine | empty}}</span>
                            </div>
                        </div>
                        <div class="half">
                            <div class="property">
                                <h4>Temperature</h4>
                                <span>{{product.temperatureInfusion | empty}} {{ product.temperatureInfusion && '°' }}</span>
                            </div>
                            <div class="property">
                                <h4>Infusion</h4>
                                <span>{{product.dureeInfusion | empty}} {{ product.dureeInfusion && 'min.' }}</span>
                            </div>
                            <div class="property">
                                <h4>Type dominant</h4>
                                <span>{{product.typeDominant | empty}}</span>
                            </div>
                            <div class="property">
                                <h4>Région d'origine</h4>
                                <span>{{product.regionOrigine | empty}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Loader from '../layout/Loader.vue';

    export default {
        name: 'ProductDescription',
        props: ['product', 'pending'],
        components: {
            Loader
        }
    }
</script>