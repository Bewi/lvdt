<template>
    <div id="search">
        <div class="container">
            <input type="text" @keyup.enter="onSearch(searchFor)" v-model="searchFor" placeholder="Rechercher un arôme, ingrédient ..." />
            <img src="./images/search.svg" alt="" @click="onSearch(searchFor)" />
        </div>
    </div>
</template>

<script>
    export default {
        name: 'search',
        props: ['onSearch']
    }
</script>