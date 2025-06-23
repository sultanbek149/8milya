<template>
  <div
    class="fixed md:hidden bottom-0 left-0 right-0 bg-slate-900 w-full pt-[20px] pb-[30px] px-[16px] z-[10]"
    style="background-color: black; backdrop-filter: blur(30px)"
  >
    <div class="flex flex-col gap-4 text-slate-100">
      <div class="grid grid-cols-2 gap-3">
        <a
          :href="info.telLink"
          class="px-[16px] border rounded text-slate-200 py-[8px] text-center font-[Nunito]"
        >
          {{ info.phone }}
        </a>
        <a
          :href="wsLink"
          class="px-[16px] border rounded text-slate-200 py-[8px] text-center font-[Nunito]"
        >
          WhatsApp
        </a>
      </div>
      <a
        @click="orderStore.toggleOpen()"
        href="#"
        class="px-[16px] bg-silver border rounded text-slate-900 py-[8px] text-center font-[Nunito] font-bold"
      >
        Рассчитать стоимость
      </a>
    </div>
  </div>
</template>

<script setup lang="ts">

import { useInfo, wsLink } from '~/composable/phone';
import { useOrderStore } from '~/store/oder.store';

const orderStore = useOrderStore();

const info = useInfo();
</script>

