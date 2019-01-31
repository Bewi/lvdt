<template>
    <footer>
        <div class="container">
            <div class="col-xs-5 col-sm-5 col-md-3 col-lg-2">
                <h3>Informations</h3>
                <router-link to="/legal">Mentions légales</router-link><br />
                <router-link to="/term-of-sales">CGV</router-link>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-3 col-lg-2">
                <h3>contact</h3>
                <a href="mailto:contact@leventdesthes.com">
                    <span class="mail-short">Envoyer un email</span>
                    <span class="mail-long">contact@leventdesthes.com</span>
                </a><br />
                <a href="tel:+32328665808">03 28 66 58 08</a><br />
                <a href="https://www.facebook.com/Le-Vent-des-Thés-287164804644004/">Facebook</a>
            </div>
            <div class="col-lg-offset-2 col-xs-5 col-sm-5 col-md-2">
                <h3>adresse</h3>
                <a href="https://goo.gl/maps/tv2T8q366KB2" target="_blank">
                    12 rue Thévenet <br />
                    59140 Dunkerque
                </a>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-2">
                <h3>Horaires</h3>
                <span>Du lundi au samedi</span>
                <span>De 9h à 19h</span>
            </div>
        </div>
    </footer>
</template>
<script>
    export default {
        name: 'footator'
    }
</script>