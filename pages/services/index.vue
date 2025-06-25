<template>
  <div class="relative">
    <LandingNavbar />
  </div>

  <Services />

  <LandingContainer>
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
</script>
