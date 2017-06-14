<template>
  <div style="overflow: hidden;">

    <!-- swiper -->

    <swiper :options="swiperOption" style="max-height: 30%; overflow: hidden;">

      <swiper-slide v-for="pic in pics" :key="pic" style="max-height: 30%; overflow: hidden"><img :src="pic" alt="" style="max-height: 30%; overflow: hidden"></swiper-slide>

      <div class="swiper-pagination" slot="pagination"></div>
    </swiper>
  </div>

</template>

<script>
  export default {
    name: 'MySlider',
    props: ['category'],
    data() {
      return {
        msg: '123',
        pics: [],
        swiperOption: {
          pagination: '.swiper-pagination',
          slidesPerView: 4,
          centeredSlides: true,
          paginationClickable: true,
          spaceBetween: 30,
          grabCursor: true
        }
      }
    },
    created() {
      // if (this.category == 'portrait') {

      // }

      axios.get('/getAll/portrait').then((response)=>{this.pics = response.data})
    }
  }
</script>

<style scoped>
  .swiper-slide {
    width: 60%;
  }
  .swiper-slide:nth-child(2n) {
    width: 40%;
  }
  .swiper-slide:nth-child(3n) {
    width: 20%;
  }
</style>