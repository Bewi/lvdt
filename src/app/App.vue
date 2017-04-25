<template>
    <div id="app">
        <corporate-header :onSearch="search"
            :showSearch="showSearch" :isLoggedIn="isLoggedIn" :isLight="isLight" :hideAccountLink="hideAccountLink"></corporate-header>
        <navigator v-if="showNav" :isLight="isLight"></navigator>
        <transition name="fade">
            <router-view></router-view>
        </transition>
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
                let route;
                for (let i = 0; i < routes.length; i ++) {
                    if (routes[i].name === this.$route.name) {
                        route = routes[i]; 
                        break;
                    }
                }   

                return route;
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