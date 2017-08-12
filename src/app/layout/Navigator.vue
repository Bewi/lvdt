<template>
    <div id="nav" :class="{ light: isLight }">
        <div class="container">
            <div id="nav-items" class="row">
                <div class="col-xs-10 col-sm-5 col-md-4 col-lg-4">
                    <h3>Les thés d'origines</h3>
                    <div class="items-container shorted">
                        <div><navigator-item name='breakfast'/></div>
                        <div><navigator-item name='ceylan' /></div>
                        <div><navigator-item name='chine' /></div>
                        <div><navigator-item name='inde' /></div>
                        <div><navigator-item name='japon' /></div>
                        <div><navigator-item name='thés fumés' /></div>
                        <div><navigator-item name='thés bio' /></div>
                        <div><navigator-item name='autres pays' /></div>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-5 col-md-4 col-md-4 col-lg-4">
                    <h3>Les thés parfumés</h3>
                    <div class="items-container shorted">
                        <div><navigator-item name='mélanges parfumés' /></div>
                        <div><navigator-item name='thés blancs' /></div>
                        <div><navigator-item name='thés lights' /></div>
                        <div><navigator-item name='thés noirs' /></div>
                        <div><navigator-item name='thés verts' /></div>
                        <div><navigator-item name='thés oolongs' /></div>
                        <div><navigator-item name='thés russes' /></div>
                        <div><navigator-item name='earl grey' /></div>
                        <div><navigator-item name='rooïbos' /></div>
                        <div><navigator-item name='infusions' /></div>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-2 col-md-2 col-lg-2">
                    <h3>Nos autres articles</h3>
                    <div class="items-container">
                        <div><navigator-item name='cafés' /></div>
                        <div><navigator-item name='alimentaire' /></div>
                        <div><navigator-item name='cristal' /></div>
                        <div><navigator-item name='coffrets' /></div>
                        <div><navigator-item name='accessoires' /></div>
                    </div>
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
        components: {
            NavigatorItem
        }
    }
</script>