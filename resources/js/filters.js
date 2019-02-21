import Vue from "vue"
import moment from 'moment'

Vue.filter('dateFormat', function (created) {
    return moment(created).format('D MMMM YYYY');
});