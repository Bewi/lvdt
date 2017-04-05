<template>
    <div id="product">
        <div class="container">
            <div class="row product-details">
                <div class="col-xs-10 col-sm-5 col-md-5 col-lg-4">
                    <img :src="`./images/items/${product.image}`" alt="">
                </div>
                <div class="col-xs-10 col-sm-5 col-md-5 col-lg-4">
                    <h2>{{product.nom}}</h2>
                    <span class="price half">3,5€ /50 grammes</span>
                    <span class="price half">5,5€ /100 grammes</span>
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
                                <span>{{product.temperatureInfusion | empty}}</span>
                            </div>
                            <div class="property">
                                <h4>Infusion</h4>
                                <span>{{product.dureeInfusion | empty}}</span>
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
    export default {
        name: 'ProductDescription',
        props: ['product']
    }
</script>