<template>
  <div style="height: 100%; overflow: hidden;">
  <button @click="del">re</button>
    <slick ref="slick" :options="slickOptions" :key="hist" style="height: 100%;">


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
        hist: 0,
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
      del() {
        this.hist ++
        this.pics.pop()
        console.log(document.querySelectorAll('.slick-slide'))
        this.reInit()
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