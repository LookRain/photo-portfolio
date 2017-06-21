import './bootstrap';

import MyNav from './components/MyNav.vue'
import UploadForm from './components/UploadForm.vue'


import Display from './components/Display.vue'
import Slider from './components/Slider.vue'
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const back = new Vue({
	el: '#back',
	components: { MyNav, UploadForm,  },
	mounted() {
		console.log('back mounted')
	}
});

const routes = [
	{ path: '/show/:cat', 
		// components: {
		// 	default: Display,
		// 	a: Slider
		// },
		component: Display,
		props: true 
	}
]

const router = new VueRouter({
  routes
})
const front = new Vue({
	el: '#front',
	router,
	components: { MyNav, Display },
	mounted() {
		console.log('front mounted')
	}
});

