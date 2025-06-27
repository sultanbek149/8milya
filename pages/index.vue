<template>
  <div class="relative">
    <LandingNavbar />
    <LandingContainer>
      <LandingHero />
    </LandingContainer>

  </div>

  <Services />
  <AdvantagesMd />
  <AboutUs />
  <OurMis />

  <LandingContainer>
    <Slider/>
    <LandingLogos />
    <LandingContactCard />
  </LandingContainer>



  <LandingFooter />
</template>

<script setup lang="ts">

import AdvantagesMd from '@/components/Main/advantages/advatages-md.vue';
import Services from '@/components/Main/Services/index.vue';
import AboutUs from '~/components/Main/AboutUs.vue';
import OurMis from '@/components/Main/OurMis.vue';
import Slider from '@/components/Slider';

useHead(() => ({
  title: '8 Миля - Клиент однажды Клиент навсегда',
  meta: [
    {
      hid: 'description',
      name: 'description',
      content: 'Полная диагностика и обслуживание вашего автомобиля в Алматы',
    },
    { hid: 'og:url', property: 'og:url', content: 'https://8milya.kz' },
    { hid: 'og:type', property: 'og:type', content: 'website' },
    {
      hid: 'og:image',
      property: 'og:image',
      content: 'https://8milya.kz/og.jpg',
    },
    {
      hid: 'og:title',
      property: 'og:title',
      content: '8 Миля - Клиент однажды Клиент навсегда',
    },
    {
      hid: 'og:description',
      property: 'og:description',
      content: 'Полная диагностика и обслуживание вашего автомобиля в Алматы',
    },
    { hid: 'twitter:card', name: 'twitter:card', content: 'summary_large_image' },
    {
      hid: 'twitter:image',
      name: 'twitter:image',
      content: 'https://8milya.kz/og.jpg',
    },
    {
      hid: 'twitter:title',
      name: 'twitter:title',
      content: '',
    },
    {
      hid: 'twitter:description',
      name: 'twitter:description',
      content: 'Полная диагностика и обслуживание вашего автомобиля в Алматы',
    },
  ],
}));
</script>
