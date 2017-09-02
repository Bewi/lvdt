<template>
    <div id="history">
        <div class="container">
            <div class="row items">
                <ul>
                    <history-line :key="sale.saleId" v-for="sale in history" :data="sale"></history-line>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
    import HistoryLine from './HistoryLine.vue';

    export default {
        name: 'History',
        components: { HistoryLine },
        props: ['history', 'pending']
    }
</script>