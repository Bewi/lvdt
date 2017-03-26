<template>
    <div id="app">
        <corporate-header :showSearch="showSearch" :isLoggedIn="isLoggedIn" :isLight="isLight" :isSuperLight="isSuperLight"></corporate-header>
        <navigator></navigator>
        <router-view></router-view>
        <footator></footator>
    </div> 
</template>

<script>
    import CorporateHeader from './header/CorporateHeader.vue';
    import routes from './routes.js';

    import { Navigator, Footator, NotFound } from './layout';
    
    export default {
        name: 'app',
        prop: ['currentRoute'],
        computed: {
            isLoggedIn: function() {
                return false;
            },
            showSearch: function() {
                let route = routes.find(r => r.name === this.$route.name) ;
                return route ? route.searchable : false; 
            },
            isLight: function() {

            },
            isSuperLight: function() {
                
            }
        },
        components: {
            CorporateHeader,
            Navigator,
            Footator
        }
    };
</script>