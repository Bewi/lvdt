import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';

import App from './App.vue';
import routes from './routes.js';
import emptyFilter from './filters/empty.filter.js';

const router = new VueRouter({
    routes
});

Vue.use(VueRouter);
Vue.use(VueResource);

var vm = new Vue({
    router,
    render: (h) => h(App)
}).$mount('#app');