<template>
    <div>
        <perso :pending='persoPending' :account='account'></perso>
        <history :history='history' :pending='historyPending'></history>
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
        },
        data() {
            return {
                account: null,
                history: null,
                accountPending: false,
                historyPending: false
            }
        },
        created() {
            this.getAccount();
        },
        methods: {
            getAccount () {
                this.accountPending = true;
                this.$http.get('/server/account.php')
                    .then(response => {
                        this.accountPending = false;

                        if (response.status === 401) {
                            this.$root._router.push({ name: 'home' });
                        } else {
                            this.account = response.body;
                            this.getHistory();
                        }
                    }).catch(error => {
                        if (error.status === 401) {
                            this.$root._router.push({ name: 'home' });
                        }
                    });
            },
            getHistory () {
                this.historyPending = true;
                this.$http.get('/server/history.php')
                    .then(response => {
                        this.historyPending = false;
                        if (response.status === 200) {
                            this.history = response.body;
                        } else {
                            console.warn(response.status);
                        }
                    }).catch(error => {
                        console.error(error);
                    });
            }
        }
    };
</script>