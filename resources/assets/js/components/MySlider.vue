<template>
  <div style="height: 100%; overflow: hidden;">

    <!-- swiper -->

    <slick ref="slick" :options="slickOptions" style="height: 100%;">


      <div style="max-height: 30vh; min-height: 30vh; border: solid; overflow: hidden;">
        <img style="max-height: 30vh; min-height: 30vh;" src="http://placehold.it/800x400" alt="">
      </div>
      <div style="max-height: 30vh; min-height: 30vh; border: solid; overflow: hidden;">
        <img style="max-height: 30vh; min-height: 30vh;" src="http://placehold.it/400x400" alt="">
      </div>
      <div style="max-height: 30vh; min-height: 30vh; border: solid; overflow: hidden;">
        <img style="max-height: 30vh; min-height: 30vh;" src="http://placehold.it/400x800" alt="">
      </div>
      <div style="max-height: 30vh; min-height: 30vh; border: solid; overflow: hidden;">
        <img style="max-height: 30vh; min-height: 30vh;" src="http://placehold.it/300x200" alt="">
      </div>

    </slick>
  </div>

</template>

<script>
  import Slick from 'vue-slick';

  export default {
    name: 'MySlider',
    components: { Slick },
    props: ['category'],
    data() {
      return {
        slickOptions: {
          slidesToShow: 3,
          variableWidth: true,
          arrows: false,
          mobileFirst: true
          // Any other options that can be got from plugin documentation
        },
        msg: '123',
        pics: [],
        swiperOption: {
          pagination: '.swiper-pagination',
          slidesPerView: 'auto',
          paginationClickable: true,
          spaceBetween: 30
        }
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
          },
        },
        created() {
      // if (this.category == 'portrait') {

      // }

      axios.get('/getAll/portrait').then((response)=>{this.pics = response.data})
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