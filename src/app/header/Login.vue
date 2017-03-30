<template>
    <div id="login" :class="{ show: isVisible }">
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
                <form>
                    <div class="input-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <label>e-mail</label>
                        <input type="text" />
                    </div>
                    <div class="input-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <label>password</label>
                        <input type="password" class="invalid" />
                    </div>
                    <div class="input-group col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <input type="submit" value="valider"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'login',
        data () {
            return {isVisible: false};
        },
        methods: {
            show () {
                this.isVisible = true;
            },
            hide() {
                this.isVisible = false;
            }
        }
    }
</script>