
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 import MyNav from './components/MyNav.vue'
 import UploadForm from './components/UploadForm.vue'

 const back = new Vue({
 	el: '#back',
 	components: { MyNav, UploadForm  },
 	mounted() {
 		console.log('back mounted')
 	}
 });
 const front = new Vue({
 	el: '#front',
 	components: { },
 	mounted() {
 		console.log('front mounted')
 	}
 });