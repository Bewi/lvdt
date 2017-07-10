<template>
    <div>
        <perso :pending='persoPending' :account='account'></perso>
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

            }
        }
    };
</script>