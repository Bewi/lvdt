<template>
    <div id="app">
        <corporate-header :showSearch="true" :isLoggedIn="false"></corporate-header>
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
        components: {
            CorporateHeader,
            Navigator,
            Footator
        }
    };

</script>