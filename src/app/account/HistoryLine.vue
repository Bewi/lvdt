<template>
    <li v-bind:id="data.saleId">
        <router-link :to="`/sale/${data.saleId}`">{{data.saleDate | date}} {{data.total | euro}}</router-link>
    </li>
</template>


<script>
    export default {
        name: 'HistoryLine',
        props: ['data']
    }
</script>
