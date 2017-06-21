<template>
<my-slider cat=""></my-slider>

</template>
<script>
import MySlider from './MySlider.vue'

export default {
  name: 'Slider',
  components: { MySlider },
  props: [ 'cat' ],
  data () {
    return {
    }
  }
}
</script>
<style lang="css" scoped>
</style>