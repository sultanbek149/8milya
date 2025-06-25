<template>
  <div class="relative pb-[100px]">
    <LandingNavbar />
  </div>

  <LandingContainer>

    <TireHero />

    <LandingWorkProcess :steps="[
      {
        title: 'Диагностика колес',
        description: 'Проверка биения дисков, износа резины и давления с помощью 3D-сканера',
      },
      {
        title: 'Демонтаж/монтаж',
        description: 'Аккуратный съем покрышек с дисков на профессиональном станке без повреждений',
      },
      {
        title: 'Балансировка',
        description: 'Точная компьютерная балансировка колес с точностью до 0,1 грамма',
      },
      {
        title: 'Ремонт дисков',
        description: 'Прокатка литых дисков, устранение восьмерок и радиального биения',
      },
      {
        title: 'Контроль качества',
        description: 'Тест-драйв для проверки отсутствия вибраций на разных скоростях',
      }
    ]" />

    <LandingWhyChooseUs>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8 mb-16">
        <!-- Преимущество 1 -->
        <div class="feature-card p-6 xl:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M12 4v2m0 0v2m0-2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Компьютерная балансировка</h5>
          <p class="text-gray-300">Точность до 0,1 г на профессиональном оборудовании Hunter</p>
        </div>

        <!-- Преимущество 2 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Ремонт дисков</h5>
          <p class="text-gray-300">Устранение восьмерок, прокатка и восстановление геометрии</p>
        </div>

        <!-- Преимущество 3 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Гарантия 2 года</h5>
          <p class="text-gray-300">На все виды работ по ремонту и обслуживанию колес</p>
        </div>
      </div>
    </LandingWhyChooseUs>

    <LandingSpecialOffer discountText="Скидка 15% на шиномонтаж и ремонт дисков до 30 июля"
      countdownText="Акция заканчивается через:" ctaText="Записаться со скидкой" imageSrc="/tire-offer.jpg"
      imageAlt="Профессиональный шиномонтаж" />

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
import TireHero from '@/components/Main/Services/TireHero.vue';


const route = useRoute();

useSeoMeta({
  title: "Шиномонтаж в Алматы — Ремонт дисков и балансировка 0,1 г за 1 час | 8 Миля",
  description: "Единственные в городе, кто работает с дисками до 24″! Устраняем восьмерки, биение, вмятины. Оборудование: Hunter, Corghi. Срочный ремонт после ям. Тест-драйв после работ. Акция: бесплатная диагностика при записи онлайн!"
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