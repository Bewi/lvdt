<template>
    <div id="app">
        <corporate-header :showSearch="true" :isLoggedIn="false"></corporate-header>
    </div> 
</template>

<script>
    import CorporateHeader from './header/CorporateHeader.vue';

    export default {
        name: 'app',
        components: {
            CorporateHeader
        }
    }
</script>