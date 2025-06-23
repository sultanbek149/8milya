<template>
  <section class="services container mx-auto mt-[100px] px-[16px]" id="auto">
    <div class="max-width-1000">
      <VmText text="Автомобили в продаже" size="24" weight="600" lineHeight="24" block />

      <VmText
        class="mt20"
        text="Наша компания занимается также подбором и продажей автомобилей"
        size="14"
        weight="400"
        lineHeight="14"
        color="gray"
        block
      />
    </div>

    <div class="services__cards mt50">
      <CarCard
        v-for="card in servicesCards"
        :id="card.id"
        :key="card.id"
        :image="card.mainImg"
        :text="card.caption"
      />
    </div>
    <div class="d-flex justify-content-center mt60">
      <nuxt-link to="/cars" class="w-100 max-width-300">
        <VmButton text="Все автомобили" outline full />
      </nuxt-link>
    </div>
  </section>
</template>
<script lang="ts">
import { VmText, VmButton } from '@/components/common';
import CarCard from './CarCard.vue';
import cars from './upd.json';

export default {
  components: { VmText, VmButton, CarCard },
  name: 'CarSale',
  setup() {
    return {
      servicesCards: cars.slice(0, 6),
    };
  },
};
</script>
<style lang="scss"></style>
