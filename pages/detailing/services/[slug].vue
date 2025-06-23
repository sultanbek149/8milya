<template>
  <div class="relative pb-[100px]">
    <LandingNavbarDetailing />
  </div>

  <LandingContainer>
    <LandingSectionhead>
      <template v-slot:title>{{ feature.title }}</template>
      <template v-slot:desc>{{ feature.description }}</template>
    </LandingSectionhead>

    <div class="grid md:grid-cols-2 gap-10 mx-auto max-w-4xl mt-16">
      <div>
        <h2 class="font-medium text-2xl text-gray-400">Описание</h2>

        <div class="mt-5 text-slate-500">
          <div v-html="feature.content" class="flex flex-col gap-3"></div>
        </div>

        <p class="text-slate-600 mt-2 mb-5 leading-relaxed text-[16px]">
          {{ feature.price }}
        </p>
        <a :href="info.wsLink"
          class="bg-silver text-black rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center">
          Записаться
        </a>
      </div>
      <div>
        <div class="mt-1 w-58 h-68">
          <div class="w-full aspect-square">
            <img :src="feature.img.src" :width="feature.img.width" :height="feature.img.height" format="avif"
              :alt="feature.title"
              class="w-full h-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl" />
          </div>
        </div>
      </div>
    </div>
  </LandingContainer>
  <LandingFooter />
</template>

<script setup lang="ts">
import { useRoute } from 'vue-router';
import { getFeatures } from '@/data/features';
import { useInfo } from '@/composable/phone';
const info = useInfo();

const route = useRoute();
const feature = getFeatures(route.params.slug as string);

// definePageMeta({
//   layout: 'landing',
// });

useSeoMeta({
  title: `Услуги - ${feature.title} Детейлинг 8 Миля`,
  description: `Вcе виды работ по - ${feature.title}`,
});
</script>

<style scoped></style>
