import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';

import App from './App.vue';
import routes from './routes.js';
import emptyFilter from './filters/empty.filter.js';
import euroFilter from './filters/euro.filter.js';
import dateFilter from './filters/date.filter.js';

const router = new VueRouter({
    routes
});

Vue.use(VueRouter);
Vue.use(VueResource);

Vue.http.interceptors.push(function(request, next) {
    next(response => {
        if (response.status === 404) {
            router.push('/404');
        } else if (response.status === 500) {
            router.push('/500');
        }
    });
})

var vm = new Vue({
    router,
    render: (h) => h(App)
}).$mount('#app');