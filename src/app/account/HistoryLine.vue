<template>
    <li v-bind:id="data.saleId">
        <router-link :to="`/sale/${data.saleId}`"><span class="head">Achat du {{data.saleDate | date}}</span> <span class="tail">{{data.total | euro}}</span></router-link>
    </li>
</template>

<script>
    export default {
        name: 'HistoryLine',
        props: ['data']
    }
</script>
