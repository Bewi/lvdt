<template>
    <router-link :to="{ name: 'products', query: { search: name }}">{{ name }}</router-link>
</template>

<script>
    export default {
        name: 'NavigatorItem',
        props: ['name']
    }
</script>