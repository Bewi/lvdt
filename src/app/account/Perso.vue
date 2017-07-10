<template>
    <div id="perso">
        <div class="container" v-if="!pending && account">
    
            <h1>Bonjour {{account.prenom}} {{account.nom}}, bienvenue dans votre espace.</h1>
    
            <h3>Fidelité</h3>
    
            <p><span class="strong">1650grammes</span> de thé acheté cette année. Cela correspond à <span class="strong">{{perc}}%</span> de reduction sur tous vos prochains achats.</p>
    
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
                return parseFloat(this.account.pourcentageDeReduction).toFixed(2);
            }
        }
    }
</script>