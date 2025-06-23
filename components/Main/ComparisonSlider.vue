<template>
  <div class="mx-auto px-4 py-12">
    <p class="text-2xl md:text-3xl font-bold text-center mb-4 md:mb-6">{{ title }}</p>

    <div class="mx-auto max-w-[800px]">
      <img-comparison-slider class="slider-example-focus slider-example-opacity-and-size rounded-md overflow-hidden shadow-lg w-full">
        <img slot="first" :src="firstImg" :alt="firstAlt" class="w-full" />
        <img slot="second" :src="secondImg" :alt="secondAlt" class="w-full" />
      </img-comparison-slider>
      <!-- <p class="mt-4 text-gray-300">{{ description }}</p> -->
    </div>
  </div>
</template>

<script lang="ts" setup>
import { useHead } from '@vueuse/head';

interface Props {
  title: string;
  firstImg: string;
  secondImg: string;
  firstAlt?: string;
  secondAlt?: string;
  description?: string;
}

const props = withDefaults(defineProps<Props>(), {
  firstAlt: 'Before repair',
  secondAlt: 'After repair',
  description: 'Engine repair work comparison'
});

useHead({
  script: [
    {
      src: 'https://unpkg.com/img-comparison-slider@7/dist/index.js',
      defer: true
    }
  ]
});
</script>

<style scoped>
.slider-example-opacity-and-size {
  --default-handle-width: 100px;
}

.slider-example-focus {
  /*
      The style below isn't necessary.
      It has been added for the sake of smoothness.
    */
  transition: box-shadow 200ms ease-in-out;
}

.slider-example-focus:focus {
  outline: none;
  box-shadow: 0px 0px 15px 5px #141c39;
}
</style>