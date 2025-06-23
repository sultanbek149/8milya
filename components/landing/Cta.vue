<template>
  <div
    class="bg-black px-20 py-20 mt-20 mx-auto max-w-5xl rounded-lg flex flex-col items-center text-center"
  >
    <h2 class="text-white text-3xl md:text-6xl">8 Миля Детейлинг</h2>
    <p class="text-slate-500 mt-4 text-lg md:text-xl">
      Верни безупречный первозданный вид своему авто и защити от сколов и царапин.
    </p>
    <div class="flex mt-5">
      <a
        :href="info.wsLink"
        class="px-[16px] border rounded text-slate-200 py-[8px] text-center font-[Nunito]"
      >
        Записаться
      </a>
    </div>
  </div>
</template>

<script setup>
import { useInfo } from '@/composable/phone';
const info = useInfo();
</script>
