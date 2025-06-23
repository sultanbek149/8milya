<template>
  <div class="grid grid-cols-2 md:grid-cols-4 mt-16 gap-4">
    <div
      v-for="item of features"
      class="flex gap-4 items-start card-wrapper"
    >
      <div class="card-content">
        <div class="mt-1 w-58 h-68 shrink-0">
          <div class="w-full aspect-square">
            <img
              :src="item.img.src"
              format="avif"
              :alt="item.title"
              class="w-full h-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl"
            />
          </div>
        </div>
        <div class="mt-3 w-full">
          <h3 class="font-semibold text-[15px] text-gray-200">{{ item.title }}</h3>
          <p class="text-slate-600 mt-2 mb-5 leading-relaxed text-[14px]">
            {{ item.price }}
          </p>
          <div
            @click="orderStore.toggleOpen()"
            class="px-[8px] bg-silver border rounded text-slate-900 py-[4px] text-center font-[Nunito] font-bold text-[12px]"
          >
            Записаться
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { useOrderStore } from '~/store/oder.store';

const orderStore = useOrderStore();

const features = [
  {
    title: 'Замена масла двигателя',
    price: 'Бесплатно',
    img: {
      src: 'https://static.8milya.kz/photos/oil/oil4.jpeg',
      width: 480,
      height: 560,
    },
  },
  {
    title: 'Полировка автомобиля',
    slug: 'polirovka',
    description:
      'Профессиональные материалы европейских и корейских брендов: Sonax, Rupis, CarPro.',
    price: 'от 40 тыс тенге',
    img: {
      src: 'https://static.8milya.kz/detailing/12s.webp',
      width: 480,
      height: 560,
    },
  },
  {
    title: 'Химчистка / Мойка',
    slug: 'moika',
    description: 'Профессиональная гипоаллергенная химия немецкого бренда Koch.',
    price: 'от 40 тыс тенге',
    img: {
      src: 'https://static.8milya.kz/detailing/10s.webp',
      width: 480,
      height: 560,
    },
  },
  {
    title: 'Бронирование фар',
    slug: 'bronirovanie-far',
    description: 'Защита от сколов',
    price: 'от 40 тыс тенге',
    img: {
      src: 'https://static.8milya.kz/detailing/1s.webp',
      width: 480,
      height: 560,
    },
  },
  {
    title: 'Удаление вмятин',
    slug: 'udalenie-vmytin',
    description: 'Беспокрасочное удаление вмятин PDR',
    price: 'от 40 тыс тенге',
    img: {
      src: 'https://static.8milya.kz/detailing/3s.webp',
      width: 480,
      height: 560,
    },
  },
  {
    title: 'Детейлинг химчистка салона',
    slug: 'detailing-himchistka-salona',
    description: 'Качественная химчистка салона',
    price: 'от 40 тыс тенге',
    img: {
      src: 'https://static.8milya.kz/detailing/6s.webp',
      width: 480,
      height: 560,
    },
  },
  {
    title: 'Реставрация салона',
    slug: 'restavracia-salona',
    description: 'Восстановление красоты и комфорта вашего салона',
    price: 'от 40 тыс тенге',
    img: {
      src: 'https://static.8milya.kz/detailing/11s.webp',
      width: 480,
      height: 560,
    },
  },
  {
    title: 'Детейлинг мойка',
    slug: 'detailing-moika',
    description:
      'Комплексная мойка и уход за вашим автомобилем для сохранения его блеска',
    price: 'от 40 тыс тенге',
    img: {
      src: 'https://static.8milya.kz/detailing/7s.webp',
      width: 480,
      height: 560,
    },
  },
];
</script>

<style scoped>
.card-wrapper {
  background-image: linear-gradient(rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
  border-radius: 1.0625rem;
  padding: 1px;
  display: inline-block;
}

.card-content {
  width: 100%;
  -webkit-backdrop-filter: blur(1px);
  backdrop-filter: blur(1px);
  background-color: #09080a;
  border-radius: 16px;
  flex-direction: column;
  justify-content: space-between;
  align-items: flex-start;
  padding: 12px;
  display: inline-block;
  height: 100%;
}
</style>
