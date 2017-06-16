<template>
  <div style="height: 100%; overflow: hidden;">

    <!-- swiper -->

    <swiper :options="swiperOption" style="height: 100%; overflow: hidden;">

      <swiper-slide id="show-card" v-for="pic in pics" :key="pic"><img :src="pic" alt="" style="min-height: 100%; max-height: 100%; width: auto; max-width: 100%; overflow: hidden; border:solid; background-color: red;"></swiper-slide>

      <!-- <div class="swiper-pagination" slot="pagination"></div> -->
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
          slidesPerView: 'auto',
          paginationClickable: true,
          spaceBetween: 0,
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
    width: 80%;
  }
  .swiper-slide:nth-child(2n) {
    width: 60%;
  }
  .swiper-slide:nth-child(3n) {
    width: 40%;
  }

</style>