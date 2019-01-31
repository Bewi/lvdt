<template>
    <div id="search">
        <div class="container">
            <input type="text" 
                @focus="onfocus" 
                @blur="onblur"
                @keyup.enter="onSearch(searchFor)" 
                v-model="searchFor" 
                placeholder="Rechercher un arôme, ingrédient ..." />
            <search-icon @click="onSearch(searchFor)" :class="{strong: hasFocus}"></search-icon>
        </div>
    </div>
</template>

<script>
    import SearchIcon from './SearchIcon.vue';

    export default {
        name: 'search',
        props: ['onSearch'],
        components: {SearchIcon},
        data () {
            return {
                hasFocus: false,
                searchFor: this.$route.query.search
            };
        },
        methods: {
            onblur () {
                this.hasFocus = false;
            },
            onfocus () {
                this.hasFocus = true;
            }
        }
    }
</script>