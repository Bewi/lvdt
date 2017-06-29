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
                    }
                }, err => {
                    // TODO handle error
                    console.error(err);
                });
            },
            onLogOff() {
                this.$http.get('/server/logout.php')
                    .then(response => {
                        if (response.status === 200) {
                            this.props.onLoggedOff();
                        }
                    }, err => {
                        console.error(err);
                    });
            }
        },
        components: {
            hero,
            login,
            search
        }
    }
</script>