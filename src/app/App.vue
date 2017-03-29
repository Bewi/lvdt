<template>
    <div id="app">
        <corporate-header :showSearch="showSearch" :onSearch="search" :isLoggedIn="isLoggedIn" :isLight="isLight" :hideAccountLink="hideAccountLink"></corporate-header>
        <navigator v-if="showNav" :isLight="isLight"></navigator>
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
        methods: {
            search (searchFor) {
                this.$root._router.push({ name: 'products', query: { search: searchFor }})
            }
        },
        computed: {
            isLoggedIn: function() {
                return false;
            },
            route: function() {
                return routes.find(r => r.name === this.$route.name);
            },
            showSearch: function() {
                return this.route ? this.route.searchable : false; 
            },
            showNav: function() {
                return this.route ? this.route.hasNav : false; 
            },
            isLight: function() {
                return this.$route.name !== 'home';
            },
            hideAccountLink: function() {
                let route = routes.find(r => r.name === this.$route.name) ;
                return this.route ? this.route.legalPage : false; 
            }
        },
        components: {
            CorporateHeader,
            Navigator,
            Footator
        }
    };
</script>