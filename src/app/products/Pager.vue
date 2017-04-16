<template>
    <ul class="pager" :v-if="pages.length > 0">
        <li v-if="firstPage > 0">...</li>
        <li v-for="page in pages" v-if="page >= firstPage && page <= lastPage">
            <router-link :to="{name: routeName, query:  getQuery(page)}" :class="{ active: page == activePage}">{{page + 1}}</router-link>
        </li>
        <li v-if="lastPage < this.pages.length - 1">...</li>
    </ul>
</template>

<script>
    export default {
        name: 'Pager',
        props: {
            pages: { default () { return []; } },
            activePage: { default: 0 }, 
            limit: { default: 5 }, 
            routeName: null,
            query: null
        }, 
        methods: {
            getQuery (page) {
                return Object.assign({}, this.query, {offset: page});
            },
            updatePage(page) {
                const middle = Math.floor(this.limit / 2);
                this.firstPage = page < middle ? 0 : page - middle;

                let lastPage = this.firstPage + (this.limit - 1);
                this.lastPage = lastPage >= this.pages.length ? this.pages.length - 1 : lastPage;
            }   
        },
        data () {
            return {
                firstPage: 0,
                lastPage: 4
            };
        },
        created () {
            this.updatePage(this.activePage);
        },
        updated () {
            this.updatePage(this.activePage);
        }
    }
</script>