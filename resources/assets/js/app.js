import './bootstrap';

import MyNav from './components/MyNav.vue'
import UploadForm from './components/UploadForm.vue'
import MySlider from './components/MySlider.vue'

const back = new Vue({
	el: '#back',
	components: { MyNav, UploadForm, MySlider  },
	mounted() {
		console.log('back mounted')
	}
});
const front = new Vue({
	el: '#front',
	components: { MyNav, MySlider },
	mounted() {
		console.log('front mounted')
	}
});