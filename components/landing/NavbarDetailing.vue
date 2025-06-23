<template>
  <LandingContainer>
    <LandingSendFormModal />
    <header v-if="!targetIsVisible"
      class="fixed top-0 left-0 right-0 z-10 hidden md:flex backdrop-blur bg-[#0000001f] py-[10px]">
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
              <a :href="item.path" class="flex lg:px-3 py-2 text-slate-100 hover:text-slate-200">
                {{ item.title }}
              </a>
            </li>
          </ul>
          <div class="flex items-center gap-4 text-[13px]">
            <a :href="wsLink" target="_blank" class="">
              <img src="/ws-logo.svg" alt="" width="50px" class="h-[40px]" />
            </a>
            <button @click="orderStore.toggleOpen()"
              class="px-[16px] bg-silver border rounded text-slate-900 py-[8px] text-center font-[Nunito] font-bold">
              Рассчитать стоимость
            </button>
            <a :href="telLink" class="px-[16px] border rounded text-slate-200 py-[8px] text-center font-[Nunito]">
              {{ info.phone }}
            </a>
          </div>
        </div>
      </div>
    </header>
    <header ref="target" class="flex flex-col lg:flex-row justify-between items-center my-5">
      <div class="flex w-full lg:w-auto items-center justify-between">
        <a href="/" class="text-sm flex text-slate-100 items-center gap-[10px]">
          <img src="/logo.svg" alt="" />
          <p class="flex flex-col">
            <span class="text-slate-300">Автоимперия</span><b> 8 Миля</b>
          </p>
        </a>

        <div class="block lg:hidden">
          <button @click="open = !open" class="text-gray-800">
            <svg fill="white" class="w-4 h-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path v-show="open" fill-rule="evenodd" clip-rule="evenodd"
                d="M18.278 16.864a1 1 0 01-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 01-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 011.414-1.414l4.829 4.828 4.828-4.828a1 1 0 111.414 1.414l-4.828 4.829 4.828 4.828z">
              </path>
              <path v-show="!open" fill-rule="evenodd"
                d="M4 5h16a1 1 0 010 2H4a1 1 0 110-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2z">
              </path>
            </svg>
          </button>
        </div>
      </div>
      <nav class="w-full lg:w-auto mt-2 lg:flex lg:mt-0" :class="{ block: open, hidden: !open }">
        <ul class="flex flex-col lg:flex-row lg:gap-3">
          <li v-for="item of menuitems">
            <a :href="item.path" class="flex lg:px-3 py-2 text-slate-100 hover:text-slate-200">
              {{ item.title }}
            </a>
          </li>
        </ul>
        <div class="lg:hidden flex items-center mt-3 gap-4">
          <a :href="telLink"
            class="border rounded text-gray-950 p-[10px] px-[16px] font-bold text-center font-[Nunito] mt-[20px] bg-silver cursor-pointer">
            {{ info.phone }}
          </a>
          <a :href="wsLink"
            class="px-[16px] border rounded text-slate-200 py-[10px] text-center font-[Nunito] mt-[20px] cursor-pointer">
            Записаться
          </a>
        </div>
      </nav>
      <div>
        <div class="hidden lg:flex flex-col items-end gap-4 text-slate-100 hover:text-slate-200">
          <div class="flex items-center gap-4 text-[13px]">
            <a :href="wsLink" class="">
              <img src="/ws-logo.svg" alt="" width="50px" />
            </a>
            <button @click="orderStore.toggleOpen()"
              class="px-[16px] bg-silver border rounded text-slate-900 py-[8px] text-center font-[Nunito] font-bold">
              Рассчитать стоимость
            </button>
            <a :href="telLink" class="px-[16px] border rounded text-slate-200 py-[8px] text-center font-[Nunito]">
              {{ info.phone }}
            </a>
          </div>

          <div class="flex gap-3 text-[13px]">
            <p>Пн. – Сб.: с 10:00 до 19:00</p>
            <a href="#contacts" class="text-blue-300">Алматы, ул. Диваева 33</a>
          </div>
        </div>
      </div>
      <div class="flex md:hidden flex-col gap-1 mt-[20px]">
        <p class="text-slate-300 text-[13px]">Пн. – Сб.: с 10:00 до 19:00</p>
        <a href="#contacts" class="text-blue-300 text-[13px]">Алматы, ул. Диваева 33</a>
      </div>
    </header>
    <div class="fixed md:hidden bottom-0 left-0 right-0 bg-slate-900 w-full pt-[20px] pb-[30px] px-[16px] z-[10]"
      style="background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(30px)">
      <div class="flex flex-col gap-4 text-slate-100">
        <div class="grid grid-cols-2 gap-3">
          <a :href="info.telLink" class="px-[16px] border rounded text-slate-200 py-[8px] text-center font-[Nunito] flex items-center justify-center">
            {{ info.phone }}
          </a>
          <a :href="wsLink" class="px-[16px] border rounded text-slate-200 py-[8px] text-center font-[Nunito] flex items-center justify-center">
            Написать WhatApp
          </a>
        </div>
        <button @click="orderStore.toggleOpen()"
          class="px-[16px] bg-silver border rounded text-slate-900 py-[8px] text-center font-[Nunito] font-bold">
          Рассчитать стоимость
        </button>
      </div>
    </div>
  </LandingContainer>
</template>

<script setup>
import { wsLink, telLink, useInfo } from '@/composable/phone';
import { useOrderStore } from '~/store/oder.store';

const target = ref(null);
const targetIsVisible = ref(true);

// const { stop } = useIntersectionObserver(
//   target,
//   ([{ isIntersecting }], observerElement) => {
//     targetIsVisible.value = isIntersecting;
//   },
// );

const orderStore = useOrderStore();

const info = useInfo();
const menuitems = [
  {
    title: 'Услуги',
    path: '/detailing/services',
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

const open = ref(false);
</script>
