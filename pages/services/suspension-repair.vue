<template>
  <div class="relative pb-[100px]">
    <LandingNavbar />
  </div>

  <LandingContainer>

    <SuspensionHero />

    <LandingWorkProcess :steps="[
      {
        title: 'Компьютерная диагностика',
        description: '3D-сканирование подвески и проверка на вибростенде',
      },
      {
        title: 'Демонтаж узлов',
        description: 'Снятие изношенных деталей с применением профессионального инструмента',
      },
      {
        title: 'Замена компонентов',
        description: 'Установка новых амортизаторов, сайлентблоков, шаровых опор',
      },
      {
        title: 'Контрольный тест-драйв',
        description: 'Проверка работы ходовой в реальных дорожных условиях',
      }
    ]" />

    <LandingWhyChooseUs>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8 mb-16">
        <!-- Преимущество 1 -->
        <div class="feature-card p-6 xl:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Комплексная проверка</h5>
          <p class="text-gray-300">Полный анализ состояния подвески с использованием диагностического оборудования</p>
        </div>
        <!-- Преимущество 2 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Оригинальные запчасти</h5>
          <p class="text-gray-300">Используем только сертифицированные детали от производителей</p>
        </div>

        <!-- Преимущество 3 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
          <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18v-2m0-4V8m0-2V4" />
          </svg>
          <h5 class="text-xl xl:text-2xl font-bold mb-2">Гарантия работ</h5>
          <p class="text-gray-300">Даем 1 год гарантии на все выполненные работы по ремонту ходовой</p>
        </div>
      </div>
    </LandingWhyChooseUs>

    <LandingSpecialOffer discountText="Скидка 10% на ремонт ходовой части до 30 июня" countdownText="Успейте воспользоваться:"
      ctaText="Узнать стоимость ремонта" imageSrc="/suspension-offer.jpeg" imageAlt="Ремонт ходовой части " />


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
import SuspensionHero from '@/components/Main/Services/SuspensionHero.vue'


const info = useInfo();


const orderStore = useOrderStore();


const route = useRoute();
const service = getServices(route.params.slug as string);

const ourServices = [
  {
    title: 'Замена моторного масла',
    description: 'Используем линейку премиальных масел всех брендов',
  },
  {
    title: 'Замена трансмиссионного масла',
    description: 'АКПП (аппаратная замена + адаптация), МКПП и раздаточные коробки, Редукторы мостов, Точное соответствие допускам производителя'
  },
  {
    title: 'Замена технических жидкостей',
    description: 'Тормозная жидкость, Охлаждающие жидкости, Жидкость ГУР, Диагностика состояния перед заменой',
  },
  {
    title: 'Сопутствующие работы',
    description: 'Замена воздушного фильтра, <br> Замена салонного фильтра, Замена топливных фильтров (включая погружные модули), Проверка систем автомобиля'
  }
]

useSeoMeta({
  title: `Профессиональная замена масла в Алматы - 8 Миля`,
  description: `Комплексные услуги по замене масла для автомобилей всех марок и моделей`,
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