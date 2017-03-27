<template>
    <div>
        <product-description></product-description>
        <discover></discover>
    </div>
</template>
<script>
    import ProductDescription from './ProductDescription.vue';
    import Discover from './Discover.vue';

    export default {
        name: 'ProductDetails',
        components: {
            ProductDescription,
            Discover
        }
    } 

    // {{$route.params.productId}}
</script>