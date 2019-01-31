import Vue from 'vue';
import moment from 'moment';

Vue.filter('date', (value) => {
    return !value || moment(value, 'YYYY-MM-DD hh:mm:ss').format('DD/MM/YYYY');
});