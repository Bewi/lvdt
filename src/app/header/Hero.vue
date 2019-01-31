<template>
    <div id="hero">
            <div class="container">
            <div class="row">
                <div class="col-xs-5 col-sm-3 col-md-2 col-lg-2">
                    <router-link to='/'><img src="./images/logo.svg" /></router-link>
                </div>
                <div id="account" v-if="!hideAccountLink" class="col-xs-offset-2 col-sm-offset-5 col-md-offset-6 col-xs-3 col-sm-2 col-md-2 col-lg-2"> 
                        <span v-if="isLoggedIn">
                            <router-link :to="{ name: 'account'}">mon compte</router-link>
                            <span @click="onLogout">Deconnexion</span>
                        </span>
                        <span v-else @click="showLogin">connexion</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default { 
        name: 'hero',
        props: ['hideAccountLink', 'showLogin', 'isLoggedIn', 'onLogout']
    }
</script>