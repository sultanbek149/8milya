<template>
  <main class="max-w-[820px] pt-[50px] pb-8 md:pt-[80px] detailng">
    <video
      class="absolute md:hidden z-[-1] video-bg top-[-20px] left-0"
      id="background-video"
      autoplay
      loop
      muted
      playsinline
      poster="https://static.8milya.kz/img/2preview.jpeg"
    >
      <source src="https://static.8milya.kz/video/2.mov" type="video/mp4" />
    </video>
    <div>
      <h1 class="text-[30px] text-left md:text-left md:text-[30px] font-medium font-[Jura]">
        8 МИЛЯ
      </h1>
      <h1
        class="text-[20px] lg:text-[36px] font-bold lg:tracking-tight text-slate-100 lg:leading-[42px]"
      >
        Клиент однажды — Клиент навсегда
      </h1>
      <p class="text-[16px] md:text-lg mt-4 text-slate-400 max-w-xl font-[Nunito]">
        Полная диагностика и обслуживание вашего автомобиля
      </p>
      <div class="flex flex-col sm:flex-row gap-3 mt-[20px]">
        <img src="/yandex.svg" width="280px" alt="yandex" />
        <img src="/google.svg" width="280px" alt="google" />
      </div>
      <div class="mt-6 hidden md:flex flex-col sm:flex-row gap-3">
        <a
          @click="orderStore.toggleOpen()"
          class="border rounded text-gray-950 p-[10px] px-[16px] font-bold text-center font-[Nunito] mt-[20px] bg-silver cursor-pointer"
        >
          Расчитать стоимость
        </a>
        <a
          :href="telLink"
          class="px-[16px] border rounded text-slate-200 py-[10px] text-center font-[Nunito] mt-[20px] cursor-pointer"
        >
          Позвонить
        </a>
      </div>
    </div>
  </main>
</template>
<script setup>
import { wsLink, telLink, useInfo } from '@/composable/phone';

import { useOrderStore } from '~/store/oder.store';

const orderStore = useOrderStore();

const info = useInfo();
</script>
<style>
.video-bg {
  filter: brightness(0.5) grayscale(80%);
}

.detailng:before {
  background-image: url(/bg.webp);
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  content: ' ';
  display: block;
  height: 100%;
  max-height: 700px;
  left: 0;
  opacity: 0.4;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}
</style>
