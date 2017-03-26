<template>
    <header>
        <hero :isLoggedIn='isLoggedIn'></hero>
        <search v-if='showSearch'></search>
        <login v-if='isLoggedIn'></login>
    </header>
</template>

<script>
    import hero from './Hero.vue';
    import login from './Login.vue';
    import search from './Search.vue';

    export default {
        name: 'corporate-header',
        props: ['isLoggedIn', 'showSearch'],
        components: {
            hero,
            login,
            search
        }
    }
</script>