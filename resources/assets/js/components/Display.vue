<template>
<div>
	<section class="section" id="main">

		<div class="container">
			
		{{ cat }}
		<button @click="add"></button>
		<ul>
			<li v-for="item in test"><img style="max-width: 10%;" :src="item" alt=""></li>
		</ul>
		</div>

	</section>
	<div id="fixed-footer">
		
	<my-slider :cat="cat"></my-slider>
	</div>
</div>
</template>
<script>
import MySlider from './MySlider.vue'

export default {
  name: 'Display',
  props: [ 'cat' ],
  components: { MySlider },
  data () {
    return {
    	test: ['https://vuejs.org/images/logo.png','https://vuejs.org/images/logo.png','https://vuejs.org/images/logo.png','https://vuejs.org/images/logo.png','https://vuejs.org/images/logo.png']
    }
  },
  methods: {
  	add() {
  		this.test.pop()
  	}
  }
}
</script>
<style>
	#fixed-footer
	{
		background-color: grey;
		position:fixed;
		bottom:0px;
		left:0px;
		right:0px;
		height:20%;
		margin-bottom:0px;
	}


</style>