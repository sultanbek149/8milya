<template>
  <Swiper
    :modules="[SwiperAutoplay, SwiperPagination]"
    :slides-per-view="2"
    :loop="true"
    :spaceBetween="10"
    :autoplay="{
      delay: 1000,
      disableOnInteraction: false,
    }"
    :centeredSlides="true"
    :style="{
      '--swiper-navigation-color': '#69F0F8',
      '--swiper-pagination-color': '#69F0F8',
      '--swiper-pagination-bullet-inactive-color': '#837398',
    }"
    :breakpoints="{
      '340': {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      '576': {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      '1024': {
        slidesPerView: 4,
        spaceBetween: 20,
      },
    }"
    :pagination="{ clickable: true }"
    :navigation="false"
  >
    <SwiperSlide>
      <video
        id="background-video"
        poster="https://static.8milya.kz/img/2preview.jpeg"
      >
        <source src="https://static.8milya.kz/video/2.mp4" type="video/mp4" />
      </video>
    </SwiperSlide>
    <SwiperSlide>
      <video
        id="background-video"
        poster="https://static.8milya.kz/img/3preview.jpg"
      >
        <source src="https://static.8milya.kz/video/3.mp4" type="video/mp4" />
      </video>
    </SwiperSlide>

  </Swiper>
</template>

<script setup lang="ts">
defineOptions({ name: 'VideoBlock' });
</script>

<style scoped></style>
