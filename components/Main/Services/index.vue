<template>
  <section class="services container mx-auto mt-[220px] md:mt-[70px] px-[16px]" id="services">
    <div class="max-width-1000">
      <p class="text-[22px]">
        Наши услуги
      </p>

      <p class="text-[14px] mt-[20px] text-[#ffffffd1] font-[Jura]">
        Наша компания является самым мощным мультибрендовым сервисом в Алматы. Наша миссия
        - 'Клиент однажды - клиент навсегда'. Мы предлагаем полный перечень услуг по
        диагностике и обслуживанию вашего автомобиля.
      </p>
    </div>

    <div class="services__cards mt-[50px]">
      <PreviewCard
        v-for="card in servicesCards"
        :key="card.icon"
        :icon="card.icon"
        :image="card.image"
        :title="card.title"
        :text="card.text"
        :link="card.link"
      />
    </div>
    <!-- <div class="flex justify-center mt-[60px]">
      <VmButton text="Все услуги" outline full class="max-width-300" />
    </div> -->
  </section>
</template>

<script setup lang="ts">
import PreviewCard from './previewCard/index.vue';
import { servicesCards } from './data';


</script>

<style lang="scss">
.services {
  &__cards {
    display: grid;
    gap: 15px;
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 992px) {
  .services {
    &__cards {
      grid-template-columns: repeat(2, 1fr);
      gap: 5px;
    }
  }
}
</style>
