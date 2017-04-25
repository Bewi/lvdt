<template>
    <div>
        <div id="mask" :class="{show: isVisible}" @click="hide"></div>
        <div id="login" :class="{show: isVisible}">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 col-sm-3 col-md-2 col-lg-2">
                        <img id="logo" src="./images/logo-light.svg" alt="" />
                    </div>
                    <div id="closeLogin" class="col-xs-offset-2 col-sm-offset-5 col-md-offset-7 col-xs-3 col-sm-2 col-md-1 col-lg-1"
                        @click="hide">
                        fermer    
                    </div>
                </div>
                <div class="row">
                    <form @submit.prevent="login(email, password)">
                        <div class="input-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <label for="email">e-mail</label>
                            <input id="email" type="text" :class="{ invalid: !validState.email}" v-model="email" />
                        </div>
                        <div class="input-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <label for="password">password</label>
                            <input id="password" type="password" :class="{ invalid: !validState.password}" v-model="password" />
                        </div>
                        <div class="input-group col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <input type="submit" value="valider"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

    export default {
        name: 'login',
        data () {
            return {
                isVisible: false,
                validState: {
                    email: true,
                    password: true
                }
            };
        },
        methods: {
            show () {
                this.isVisible = true;
            },
            hide () {
                this.isVisible = false;
            },
            login (email, password) {
                let validState = {
                    email: true,
                    password: true
                };

                let hasInvalidities = false;

                //TODO: validate email
                if (!email) {
                    this.$set(this.validState, 'email', false);
                    hasInvalidities = true;
                }

                if (!password) {
                    this.$set(this.validState, 'password', false);
                    hasInvalidities = true;
                }

                if (!hasInvalidities) {
                    this.onLogin(email, password);
                }
                
            }   
        },
        props: ['onLogin']
    }
</script>