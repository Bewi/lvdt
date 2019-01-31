<template>
    <header :class="{light: isLight}">
        <hero :isLoggedIn='isLoggedIn' :hideAccountLink='hideAccountLink' :showLogin='showLogin' :onLogout='onLogout'></hero>
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
        props: ['isLoggedIn', 'showSearch', 'isLight', 'hideAccountLink', 'onSearch', 'onLoggedIn', 'onLoggedOff'],
        methods: {
            showLogin () {
                this.$refs.login.show();
            },
            onLogin(email, password) {
                this.$http.get('/server/login.php', {
                    headers: {
                        Authorization: 'Basic ' + window.btoa(unescape(encodeURIComponent(email + ':' + password)))
                    }
                }).then(response => {
                    if (response.status === 200) {
                        this.onLoggedIn();
                        this.$root._router.push({ name: 'account' });
                    }
                }, err => {
                    // TODO handle error
                    console.error(err);
                    this.$refs.login.notifyWrongLogin();
                });
            },
            onLogout() {
                this.$http.get('/server/logout.php')
                    .then(response => {
                        if (response.status === 200) {
                            this.onLoggedOff();
                            this.$root._router.push({ name: 'home' });
                        }
                    }, err => {
                        console.error(err);
                    });
            },
        },
        components: {
            hero,
            login,
            search
        }
    }
</script>