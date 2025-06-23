<script setup>
import { useInfo } from '@/composable/phone';

definePageMeta({
  layout: 'landing',
});

const info = useInfo();

useSeoMeta({
  title: 'Услуги - Детейлинг 8 Миля',
  description: `Вcе виды работ по детейлингу авто, Пленки: Hexis, Stek, Suntek. Гарантия 10 лет`,
});
</script>

<template>
  <LandingContainer>
    <LandingSectionhead>
      <template v-slot:title>Услуги</template>
      <template v-slot:desc>Вcе виды работ по детейлингу авто</template>
    </LandingSectionhead>
    <LandingFeaturesCardDetailing />
  </LandingContainer>
</template>
