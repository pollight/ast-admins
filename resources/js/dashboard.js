/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
require('vue2-animate/dist/vue2-animate.min.css');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('tab-picture-content-component', require('./components/TabPictureContentComponent.vue').default);
Vue.component('data-boards-table-component', require('./components/DataBoardsTableComponent.vue').default);
Vue.component('current-board-table-component', require('./components/CurrentBoardsTableComponent.vue').default);
Vue.component('planning-component', require('./components/PlanningComponent.vue').default);
Vue.component('date-time-component', require('./components/DateTimeComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});