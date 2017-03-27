<template>
    <div>
        <perso></perso>
        <history></history>
    </div>
</template>
<script>
    import Perso from './Perso.vue';
    import History from './History.vue';

    export default {
        name: 'Account',
        components: {
            Perso,
            History
        }
    };
</script>