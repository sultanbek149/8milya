<template>
  <div class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-6">
    <div v-for="item of filteredFeatures" :key="item.slug" class="flex gap-4 items-start card-wrapper">
      <div class="card-content flex h-full flex-col">
        <div class="mt-1 w-58 h-68 shrink-0">
          <div class="w-full aspect-square">
            <img :src="item.img.src" :width="item.img.width" :height="item.img.height" format="avif" :alt="item.title"
              class="w-full h-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl" />
          </div>
        </div>
        <div class="mt-3 w-full flex flex-col flex-1">
          <h3 class="font-semibold text-lg text-gray-200">{{ item.title }}</h3>
          <p class="text-slate-500 mt-2 leading-relaxed">
            {{ item.description }}
          </p>

          <p class="text-slate-600 mt-2 mb-5 leading-relaxed text-[14px]">
            {{ item.price }}
          </p>
          <div class="mt-auto">
            <nuxt-link :to="'/detailing/services/' + item.slug"
              class="bg-silver text-black rounded-lg py-2 px-6 w-full flex justify-center text-center">
              Подробнее
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { features } from '@/data/features';

const props = defineProps({
  excludeSlug: {
    type: String,
    required: false, // This makes it optional
    default: ''
  }
});

const filteredFeatures = computed(() => {
  if (!props.excludeSlug) return features;
  return features.filter(item => item.slug !== props.excludeSlug);
});
</script>

<style scoped>
.card-wrapper {
  background-image: linear-gradient(rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
  border-radius: 1.0625rem;
  padding: 1px;
  display: inline-block;
}

.card-content {
  width: 100%;
  -webkit-backdrop-filter: blur(1px);
  backdrop-filter: blur(1px);
  background-color: #09080a;
  border-radius: 16px;
  flex-direction: column;
  justify-content: space-between;
  align-items: flex-start;
  padding: 1.5rem;
  /* display: inline-block; */
  height: 100%;
}
</style>
