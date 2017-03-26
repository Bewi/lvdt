<template>
    <div id="app">
        <corporate-header :showSearch="true" :isLoggedIn="false"></corporate-header>
        <navigator></navigator>
        <home></home>
        <footator></footator>
    </div> 
</template>

<script>
    import CorporateHeader from './header/CorporateHeader.vue';
    import Home from './home/Home.vue';
    import Navigator from './layout/Navigator.vue';
    import Footator from './layout/Footator.vue';

    export default {
        name: 'app',
        components: {
            CorporateHeader,
            Home,
            Navigator,
            Footator
        }
    };

</script>