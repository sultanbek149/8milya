<template>
  <div class="relative pb-[100px]">
    <LandingNavbar />
  </div>

  <LandingContainer>

    <OilHero />

    <LandingOurServices />

    <LandingWorkProcess :steps="[
      { title: 'Консультация', description: 'Подбор масла по VIN-коду' },
      { title: 'Диагностика', description: 'Проверка состояния масла и фильтров' },
      { title: 'Замена', description: 'Быстрая замена за 15-30 минут' },
      { title: 'Гарантия', description: 'Отметка в сервисной книжке' }
    ]" />


    <LandingWhyChooseUs>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8 mb-16">
        <!-- Преимущество 1 -->
        <div class="feature-card p-6 xl:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M3 15c2.483 0 4.345-3 4.345-3s1.862 3 4.345 3c2.482 0 4.965-3 4.965-3s2.483 3 4.345 3M3 20c2.483 0 4.345-3 4.345-3s1.862 3 4.345 3c2.482 0 4.965-3 4.965-3s2.483 3 4.345 3M3 10c2.483 0 4.345-3 4.345-3s1.862 3 4.345 3c2.482 0 4.965-3 4.965-3s2.483 3 4.345 3" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 4h18v4H3z" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Премиальные масла</h5>
          <p class="text-gray-300">В наличии полный ассортимент масел Mobil, Shell, Castrol и других ведущих брендов</p>
        </div>

        <!-- Преимущество 2 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M12 15l-4-4m0 0l4-4m-4 4h8m-4 4v4m6-16H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2z" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Подбор по VIN-коду</h5>
          <p class="text-gray-300">Точный подбор масла по спецификациям производителя вашего автомобиля</p>
        </div>

        <!-- Преимущество 3 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Гарантия качества</h5>
          <p class="text-gray-300">Используем только оригинальные фильтры и даем гарантию на все работы</p>
        </div>
      </div>
    </LandingWhyChooseUs>


    <LandingSpecialOffer discountText="Скидка 10% на замену масла до 30 июня" countdownText="Успейте воспользоваться:"
      ctaText="Подобрать масло и записаться" imageSrc="/img/oil-special.jpg" imageAlt="Профессиональная замена масла" />


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
import OilHero from '@/components/Main/Services/oil/OilHero.vue'



const info = useInfo();


const orderStore = useOrderStore();


const route = useRoute();
const service = getServices(route.params.slug as string);


useSeoMeta({
  title: "Замена масла за 20 минут — Бесплатно при покупке масла! | 8 Миля Алматы",
  description: "Профессиональная замена масел (двигатель, АКПП, редуктор) с компьютерной диагностикой. Подбор по VIN-коду, оригинальные фильтры, гарантия работ. Все марки авто. Запишитесь сейчас — получите скидку 10%!"
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