<template>
  <div class="slider-wrapper">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <Swiper :modules="modules" :slides-per-view="1.4" :centered-slides="true" :loop="true" :space-between="70"
      :navigation="{
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }" @swiper="onSwiperReady" class="mySwiper home-swiper">


      <SwiperSlide v-for="(slide, index) in props.slides" :key="index">
        <div class="slider">
          <div class="slide" :style="{ backgroundImage: `url(${slide.image})` }">
            <div class="content-box">
              <h3>{{ slide.title }}</h3>
              <p v-for="(para, i) in slide.paragraphs" :key="i">{{ para }}</p>
            </div>
          </div>
        </div>
      </SwiperSlide>
    </Swiper>

  </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'

const modules = [Navigation]

function onSwiperReady(swiper) {
  // This is the real Swiper instance after mounting
  swiper.navigation.init()
  swiper.navigation.update()
}

const props = defineProps([
    'slides'
]);

</script>

<style scoped>
/* Customize swiper navigation buttons here */
.swiper-button-next,
.swiper-button-prev {
  color: #000;
}
</style>
