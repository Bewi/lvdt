<template>
    <div id="perso">
        <div class="container" v-if="!pending && account">
    
            <h1>Bonjour {{account.prenom}} {{account.nom}}, bienvenue dans votre espace.</h1>
    
            <h3>Fidelité</h3>
    
            <!-- TODO : Put this line back on next <p> tag as soon as we have the information -->
            <!-- <span class="strong">0grammes</span> de thé acheté cette année.  -->
            <p>Cela correspond à <span class="strong">{{perc}}%</span> de reduction sur tous vos prochains achats.</p>
    
            <h3>Historique</h3>
    
        </div>
    
    </div>
</template>
<script>
    export default {
        name: 'Perso',
        props: ['pending', 'account'],
        computed: {
            perc() {
                if (!this.account.pourcentageDeReduction) {
                    return 0;
                }
                
                return parseFloat(this.account.pourcentageDeReduction).toFixed(2);
            }
        }
    }
</script>