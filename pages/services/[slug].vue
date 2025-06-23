<template>
  <div class="relative pb-[100px]">
    <LandingNavbarDetailing />
  </div>

  <LandingContainer>

    <GeometryHero />

    <section>
      <h4 class="text-2xl md:text-4xl font-black mb-6 text-center uppercase">Наше оборудование</h4>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
        <div class="equipment-card p-8 rounded-lg">
          <div class="text-3xl md:text-4xl mb-6 ">3D-стенд</div>
          <p class="text-gray-300 mb-4">Современный компьютерный стенд Hunter Elite с 3D-сканированием колес</p>
          <ul class="space-y-3">
            <li class="flex items-start">
              <span class="text-green-500 mr-2">✓</span>
              <span>Точность измерений до 0.01°</span>
            </li>
            <li class="flex items-start">
              <span class="text-green-500 mr-2">✓</span>
              <span>База данных параметров для всех марок авто</span>
            </li>
            <li class="flex items-start">
              <span class="text-green-500 mr-2">✓</span>
              <span>Автоматическая калибровка</span>
            </li>
          </ul>
        </div>

        <div class="equipment-card p-8 rounded-lg">
          <div class="text-3xl md:text-4xl mb-6 ">Лазерная линейка</div>
          <p class="text-gray-300 mb-4">Прецизионное оборудование для контроля геометрии подвески</p>
          <ul class="space-y-3">
            <li class="flex items-start">
              <span class="text-green-500 mr-2">✓</span>
              <span>Микронная точность измерений</span>
            </li>
            <li class="flex items-start">
              <span class="text-green-500 mr-2">✓</span>
              <span>Контроль всех параметров подвески</span>
            </li>
            <li class="flex items-start">
              <span class="text-green-500 mr-2">✓</span>
              <span>Диагностика скрытых дефектов</span>
            </li>
          </ul>
        </div>
      </div>

    </section>

    <LandingOurServices />

    <LandingWorkProcess />


    <LandingWhyChooseUs />


    <LandingSpecialOffer />


    <LandingLogos />

    <LandingContactCard />

  </LandingContainer>


  <LandingFooter />

</template>

<script lang="ts" setup>
import { useRoute } from 'vue-router';
import { getServices } from '@/data/services';
import { useOrderStore } from '~/store/oder.store';
import { useInfo } from '@/composable/phone';
import GeometryHero from '@/components/Main/Services/geometry/GeometryHero.vue'



const info = useInfo();


const orderStore = useOrderStore();


const route = useRoute();
const service = getServices(route.params.slug as string);

useSeoMeta({
  title: `Услуги - ${service?.title} Детейлинг 8 Миля`,
  description: `Вcе виды работ по - ${service?.title}`,
});

</script>

<style scoped>
.equipment-card {
  border: 1px solid #333;
  transition: all 0.3s ease;
  cursor: pointer;
}

.equipment-card:hover {
  border-color: #fff;
  transform: translateY(-5px);
}
</style>