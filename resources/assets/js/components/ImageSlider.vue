<template>
	<div class="slider js_slider">
		<div class="frame js_frame">
			<ul class="slides js_slides">
				<li class="js_slide">1</li>
				<li class="js_slide">2</li>
				<li class="js_slide">3</li>
				<li class="js_slide" v-for="pic in pics" :key="pic" >666</li>

				
			</ul>
		</div>
		<span class="js_prev prev">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#2E435A" d="M302.67 90.877l55.77 55.508L254.575 250.75 358.44 355.116l-55.77 55.506L143.56 250.75z"/></g></svg>
		</span>
		<span class="js_next next">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#2E435A" d="M199.33 410.622l-55.77-55.508L247.425 250.75 143.56 146.384l55.77-55.507L358.44 250.75z"/></g></svg>
		</span>
	</div>
</template>
<script>
	import {lory} from 'lory.js';
	export default {
		name: 'ImageSlider',
		data () {
			return {
				pics: []
			}
		},
		created() {
			axios.get('/getAll/portrait').then((response)=>{this.pics = response.data});
			setTimeout(function(){
				console.log('time up')
				document.addEventListener('DOMContentLoaded', () => {
					const slider = document.querySelector('.js_slider');

					lory(slider, {
            // options going here
          });
				});
    //do what you need here
  }, 2000);
		},
		mounted() {
			
		}
	}
</script>
<style lang="css" scoped>

/**
* (optional) define here the style definitions which should be applied on the slider container
* e.g. width including further controls like arrows etc.
*/
.slider {}

.frame {
   /**
    * (optional) wrapper width, specifies width of the slider frame.
    */
    width: 880px;

    position: relative;
    font-size: 0;
    line-height: 0;
    overflow: hidden;
    white-space: nowrap;
  }

  .slides {
  	display: inline-block;
  }

  li {
  	position: relative;
  	display: inline-block;

   /**
    * (optional) if the content inside the slide element has a defined size.
    */

  }

  .prev, .next {
  	position: absolute;
  	top: 50%;
  	margin-top: -25px;
  	display: block;
  	cursor: pointer;
  }

  .next {
  	right: 0;
  }

  .prev {
  	left: 0;
  }

  .next svg, .prev svg {
  	width: 25px;
  }

</style>