<template>
    <header :class="{light: isLight}">
        <hero :isLoggedIn='isLoggedIn' :hideAccountLink='hideAccountLink'></hero>
        <search v-if='showSearch' :onSearch="onSearch"></search>
        <login v-if='!isLoggedIn'></login>
    </header>
</template>

<script>
    import hero from './Hero.vue';
    import login from './Login.vue';
    import search from './Search.vue';

    export default {
        name: 'corporate-header',
        props: ['isLoggedIn', 'showSearch', 'isLight', 'hideAccountLink', 'onSearch'],
        components: {
            hero,
            login,
            search
        }
    }
</script>