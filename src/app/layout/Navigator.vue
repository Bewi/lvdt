<template>
    <div id="nav" :class="{ light: isLight }">
        <div class="container">
            <div id="toggler" class="row" @click="toggle" :class="{ toggled: visible }">
                <div class="col-xs-10">
                    <h3>Découvrir les thés <img src="./images/arrow.svg" alt=""/></h3>
                </div>
            </div>
            <div id="nav-items" class="row" :class="{ show: visible }">
                <div class="col-xs-10 col-sm-5 col-md-4 col-lg-4">
                    <h3>Les thés d'origines</h3>
                    <ul class="half">
                        <li><navigator-item name='breakfast'/></li>
                        <li><navigator-item name='ceylan' /></li>
                        <li><navigator-item name='chine' /></li>
                        <li><navigator-item name='inde' /></li>
                        <li><navigator-item name='japon' /></li>
                    </ul>
                    <ul class="half">
                        <li><navigator-item name='thés fumés' /></li>
                        <li><navigator-item name='thés bio' /></li>
                        <li><navigator-item name='autres pays' /></li>
                    </ul>
                </div>
                <div class="col-xs-10 col-sm-5 col-md-4 col-md-4 col-lg-4">
                    <h3>Les thés parfumés</h3>
                    <ul class="half">
                        <li><navigator-item name='mélanges parfumés' /></li>
                        <li><navigator-item name='thés blancs' /></li>
                        <li><navigator-item name='thés lights' /></li>
                        <li><navigator-item name='thés noirs' /></li>
                        <li><navigator-item name='thés verts' /></li>
                    </ul>
                    <ul class="half">
                        <li><navigator-item name='thés oolongs' /></li>
                        <li><navigator-item name='thés russes' /></li>
                        <li><navigator-item name='earl grey' /></li>
                        <li><navigator-item name='rooïbos' /></li>
                        <li><navigator-item name='infusions' /></li>
                    </ul>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-2 col-md-2 col-lg-2">
                    <h3>Nos autres articles</h3>
                    <ul>
                        <li><navigator-item name='cafés' /></li>
                        <li><navigator-item name='alimentaire' /></li>
                        <li><navigator-item name='cristal' /></li>
                        <li><navigator-item name='coffrets' /></li>
                        <li><navigator-item name='accessoires' /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import NavigatorItem from './NavigatorItem.vue';

    export default {
        name: 'nav',
        props: ['isLight'],
        data () {
            return { visible: false }
        },
        methods: {
            toggle () {
                this.visible = !this.visible;
            }
        },
        components: {
            NavigatorItem
        }
    }
</script>