<template>
    <header :class="{light: isLight}">
        <hero :isLoggedIn='isLoggedIn' :hideAccountLink='hideAccountLink' :showLogin='showLogin'></hero>
        <search v-if='showSearch' :onSearch="onSearch"></search>
        <login v-if='!isLoggedIn' ref="login" :onLogin="onLogin"></login>
    </header>
</template>

<script>
    import hero from './Hero.vue';
    import login from './Login.vue';
    import search from './Search.vue';

    export default {
        name: 'corporate-header',
        props: ['isLoggedIn', 'showSearch', 'isLight', 'hideAccountLink', 'onSearch', 'onLogin'],
        methods: {
            showLogin () {
                this.$refs.login.show();
            }
        },
        components: {
            hero,
            login,
            search
        }
    }
</script>