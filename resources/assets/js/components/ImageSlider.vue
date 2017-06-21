<template>
  <div style="height: 100%; overflow: hidden;">

    <!-- swiper -->

    <swiper :options="swiperOption" style="height: 100%; overflow: hidden;">

      <swiper-slide id="show-card" v-for="pic in pics" :key="pic" style="max-height: 20vh; min-height: 20vh;"><img :src="pic" alt="" style="max-height: 20vh; min-height: 20vh;"></swiper-slide>

      <!-- <div class="swiper-pagination" slot="pagination"></div> -->
    </swiper>
  </div>

</template>

<script>
  export default {
    name: 'ImageSlider',
    props: ['category'],
    data() {
      return {
        msg: '123',
        pics: [],
        swiperOption: {
          pagination: '.swiper-pagination',
          slidesPerView: 5,
          centeredSlides: true,
          paginationClickable: true,
   
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

</style>