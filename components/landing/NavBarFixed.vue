<template>
  <header
    class="fixed top-0 left-0 right-0 hidden md:flex backdrop-blur bg-[#0000001f] py-[10px] z-10"
  >
    <div class="max-w-screen-xl mx-auto px-5 w-full">
      <div class="flex items-center justify-between">
        <a href="/" class="text-sm flex text-slate-100 items-center gap-[10px]">
          <img src="/logo.svg" alt="" class="h-[20px]" />
          <p class="flex gap-[10px]">
            <span class="text-slate-300">Автоимперия</span><b> 8 Миля</b>
          </p>
        </a>
        <ul class="flex flex-col lg:flex-row lg:gap-3">
          <li v-for="item of menuitems">
            <a
              :href="item.path"
              class="flex lg:px-3 py-2 text-slate-100 hover:text-slate-200"
            >
              {{ item.title }}
            </a>
          </li>
        </ul>
        <div class="flex items-center gap-4 text-[13px]">
          <a :href="wsLink" class="">
            <img src="/ws-logo.svg" alt="" width="50px" class="h-[40px]" />
          </a>
          <a
            href="#"
            @click="orderStore.toggleOpen()"
            class="px-[16px] bg-silver border rounded text-slate-900 py-[8px] text-center font-[Nunito] font-bold"
          >
            Рассчитать стоимость
          </a>
          <a
            :href="telLink"
            class="px-[16px] border rounded text-slate-200 py-[8px] text-center font-[Nunito]"
          >
            {{ info.phone }}
          </a>
        </div>
      </div>
    </div>
  </header>
</template>

<script setup lang="ts">

import { telLink, useInfo, wsLink } from '~/composable/phone';
import { useOrderStore } from '~/store/oder.store';
const orderStore = useOrderStore();

const info = useInfo();

const menuitems = [
  {
    title: 'Услуги',
    path: '/services',
  },
  {
    title: 'О нас',
    path: '/about',
  },
  {
    title: 'Контакты',
    path: '/contact',
  },
];
</script>

<style scoped>

</style>