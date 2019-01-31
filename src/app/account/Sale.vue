<template>
    <div id="sale">
        <div class="container">
            <h1>Détail de la vente : </h1>
            <div class="row" v-for="detail in sale" :key="detail.detailId">
                <h3>{{detail.label}} - {{ detail.quantity }} {{ detail.packing }} - {{ detail.total | euro }}</h3>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Sale',
        created () {
            this.fetchData();
        },
        data() {
            return {
                sale: [],
                salePending: false
            }
        },
        methods: {
            fetchData() {
                this.salePending = true;

                this.$http.get(`/server/sale-detail.php?saleId=${this.$route.params.saleId}`)
                    .then((response) => {
                        this.salePending = false;
                        if (response.status === 200) {
                            this.sale = response.body;
                        } else {
                            console.warn(response.status);
                        }
                    }).catch((response) => {
                        this.salePending = false;
                    });
            }
        }
    }

</script>
