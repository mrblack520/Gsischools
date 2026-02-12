<template>

    <Swiper :modules="modules" :slides-per-view="1" :centered-slides="true" :loop="true" :space-between="70"
        :navigation="{
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }" @swiper="onSwiperReady" class="mySwiper ">


        <SwiperSlide v-for="(slide, index) in props.slides" :key="index">
            <p v-for="(para, i) in slide.paragraphs" :key="i">{{ para }}</p>
        </SwiperSlide>
    </Swiper>
    <div class="swiper-button-prev custom-prev"></div>
    <div class="swiper-button-next custom-next"></div>

</template>

<script setup>
import { defineProps } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'

const modules = [Navigation]

function onSwiperReady(swiper) {

    swiper.navigation.init()
    swiper.navigation.update()
}

const props = defineProps([
    'slides'
]);

</script>