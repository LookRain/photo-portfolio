<template>
  <div style="height: 100%; overflow: hidden;">
    <slick ref="slick" :options="slickOptions" style="height: 100%;">


      
       
     
      <div v-for="pic in pics" :key="pic" style="max-height: 20vh; min-height: 20vh;">
      
        <img style="max-height: 20vh; min-height: 20vh;" :src="pic" alt="">

      </div>

    </slick>
  </div>

</template>

<script>
  import Slick from 'vue-slick';

  export default {
    name: 'MySlider',
    components: { Slick },
    // props: ['pics'],
    data() {
      return {
        slickOptions: {
          slidesToShow: 3,
          variableWidth: true,
          arrows: false,
          mobileFirst: true,
          infinite: false
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
          },
        },
    created() {
      axios.get('/getAll/street').then((response)=>{this.pics = response.data})
      // this.reInit
    },
    updated() {
     this.reInit()
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