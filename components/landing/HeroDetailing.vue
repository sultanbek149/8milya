<template>
  <main class="max-w-[820px] pt-[50px] pb-8 md:pt-[80px] detailng">
    <div>
      <h1 class="text-[20px] lg:text-[36px] font-semibold lg:tracking-tight text-slate-100 lg:leading-[42px]">
        Вернём безупречный первозданный вид вашему авто и защитим от сколов и царапин.
      </h1>
      <p class="text-[16px] md:text-lg mt-4 text-slate-400 max-w-xl font-[Nunito]">
        Клиентоориентированный сервис и профессиональный уход за вашим авто в Алматы.
      </p>
      <div class="flex flex-col sm:flex-row gap-3 mt-[20px]">
        <img src="/yandex.svg" width="280px" alt="yandex" />
        <img src="/google.svg" width="280px" alt="google" />
      </div>
      <div class="mt-6 hidden md:flex flex-col sm:flex-row gap-3">
        <button @click="orderStore.toggleOpen()"
          class="border rounded text-gray-950 p-[10px] px-[16px] font-bold text-center font-[Nunito] mt-[20px] bg-silver cursor-pointer">
          Рассчитать стоимость
        </button>
        <a :href="telLink"
          class="px-[16px] border rounded text-slate-200 py-[10px] text-center font-[Nunito] mt-[20px] cursor-pointer">
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
.detailng:before {
  background-image: url(/bg.webp);
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  content: ' ';
  display: block;
  height: 100%;
  left: 0;
  opacity: 0.4;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}
</style>
