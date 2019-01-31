import Vue from 'vue';

Vue.filter('euro', (value) => {
    return `${value.replace('.', ',')}€`;
});