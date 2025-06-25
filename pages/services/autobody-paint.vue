<template>
  <div class="relative pb-[100px]">
    <LandingNavbar />
  </div>

  <LandingContainer>

    <AutoPaintHero />

    <LandingOurServices />


    <LandingWorkProcess :steps="[
      {
        title: 'Заявка',
        description: 'Вы оставляете заявку на сайте или по телефону',
      },
      {
        title: 'Диагностика и оценка',
        description: 'Бесплатно в течение часа',
      },
      {
        title: 'Ремонт и покраска',
        description: 'Фиксированные сроки, фото-отчет',
      },
      {
        title: 'Передача автомобиля ',
        description: 'С гарантийным талоном',
      }
    ]" />


    <ComparisonSlider title="До и после" first-img="/suspension-offer.jpeg" second-img="/engine-repair.jpeg" />


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
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Окрасочная камера</h5>
          <p class="text-gray-300">Профессиональное окрашивание в термокамере с фильтрацией воздуха</p>
        </div>

        <!-- Преимущество 2 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Точный подбор цвета</h5>
          <p class="text-gray-300">Компьютерный подбор краски по VIN с гарантией совпадения оттенка</p>
        </div>

        <!-- Преимущество 3 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Гарантия 3 года</h5>
          <p class="text-gray-300">Пожизненная защита от коррозии и гарантия на лакокрасочное покрытие</p>
        </div>
      </div>
    </LandingWhyChooseUs>


    <LandingSpecialOffer discountText="Скидка 10% на ремонт ходовой части до 30 июня"
    countdownText="Успейте воспользоваться:" ctaText="Воспользоваться скидкой" imageSrc="/img/car-paint.webp"
      imageAlt="Ремонт ходовой части " />


    <LandingLogos />

    <LandingContactCard />

  </LandingContainer>


  <LandingFooter />

</template>

<script lang="ts" setup>
import AutoPaintHero from '@/components/Main/Services/AutoPaintHero.vue'
import ComparisonSlider from '@/components/Main/ComparisonSlider.vue'

useSeoMeta({
  title: "Покраска и кузовной ремонт в [Город] | Восстановление за 1 день | 8 Миля",
  description: "Профессиональная покраска с компьютерным подбором цвета по VIN. Восстановление геометрии на стапеле Celette. Гарантия 3 года. Устраняем последствия ДТП, сколы, коррозию. Бесплатный расчет стоимости за 15 минут!"
});
</script>
