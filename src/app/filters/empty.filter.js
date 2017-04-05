import Vue from 'vue';

Vue.filter('empty', (value) => {
    return value || '—';
});