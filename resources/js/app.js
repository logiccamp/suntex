/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import VueToaster from 'vue-toastr'
Vue.use(VueToaster)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('search-component', require('./components/SearchComponent.vue').default);
Vue.component('type-component', require('./components/TypeComponent.vue').default);
Vue.component('request-feedback', require('./components/RequestFeedback.vue').default);
Vue.component('products-agent', require('./components/AgentproductsComponent.vue').default);
Vue.component('aproduct-component', require('./components/AProductComponent.vue').default);
Vue.component('messages-agent', require('./components/MessagesAgent.vue').default);
Vue.component('message-component', require('./components/MessagesComponent.vue').default);
Vue.component('home-messages', require('./components/HomeMessages.vue').default);
Vue.component('read-mail', require('./components/ReadMail.vue').default);
Vue.component('home-deals', require('./components/HomeDeals.vue').default);
Vue.component('update-profile', require('./components/UpdateProfile.vue').default);
Vue.component('loader-component', require('./components/loaderComponent.vue').default);
Vue.component('upload-selfie', require('./components/uploadSelfie.vue').default);
Vue.component('upload-id', require('./components/uploadId.vue').default);
Vue.component('upload-selfieid', require('./components/uploadSelfieId.vue').default);
Vue.component('agent-messagesent', require('./components/MessagesAgentSent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
