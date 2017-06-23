<template>
  <div style="height: 100%; overflow: hidden;">

  <slick class="slider-nav" ref="slick" :options="slickOptions" style="height: 100%;">


      <div v-for="pic in pics" :key="pic" style="max-height: 20vh; min-height: 20vh;">

        <img :key="pic" style="max-height: 20vh; min-height: 20vh;" :src="pic" alt="">

      </div>

    </slick>
  </div>

</template>

<script>
  import Slick from 'vue-slick';

  export default {
    name: 'MySlider',
    components: { Slick },
    props: ['cat'],
    data() {
      return {
       slickOptions: {
        slidesToShow: 5,
        slidesToScroll: 3,
        variableWidth: true,
        centerMode: true,
        centerPadding: '60px',
        arrows: false,
        speed: 300,
        infinite: false,
        focusOnSelect: true,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        ]
          // Any other options that can be got from plugin documentation
        },
        msg: '123',
        pics: [],
        // pics2: [1,2,3,4,5,6,7]
      }
    },
    methods: {
      next() {
        this.$refs.slick.next();
      },

      prev() {
        this.$refs.slick.prev();
      },

      reInit() {
      // Helpful if you have to deal with v-for to update dynamic lists
      this.$refs.slick.reSlick();
      console.log('reinitializing')
    }
  },
  created() {
    axios.get('/getAll/' + this.cat).then((response)=>{this.pics = response.data})
      // this.reInit
    },
    updated() {
      console.log('updated')
      this.reInit()
    },
    watch: {
      cat (val) {
        let temp = []
        // axios.get('/getAll/' + this.cat).then((response)=>{temp = response.data})
        this.pics.pop()
        this.reInit()
        // this.pics.push('https://vuejs.org/images/logo.png')
      }
    }
  }
</script>

<style src="slick-carousel/slick/slick.css">
/*  .swiper-slide {
    border: solid;
    width: 30%;
  }
  .swiper-slide:nth-child(2n) {
    width: 10%;
  }
  .swiper-slide:nth-child(3n) {
    width: 40%;
  }*/

</style>