<script setup>
definePageMeta({
  layout: 'landing',
});
useSeoMeta({
  title: 'О нас - Детейлинг 8 Миля. Оклейка, Полировка, Химчистка',
  description: 'Оклейка, Полировка, Химчистка. Все виды работ.',
  ogTitle: 'О нас - Детейлинг 8 Миля. Оклейка, Полировка, Химчистка',
  ogDescription: 'Оклейка, Полировка, Химчистка. Все виды работ.',
});
const team = [
  {
    name: 'Оклейка',
    title: 'от 100 тыс тенге',
    avatar: {
      src: '/img/2m.webp',
      width: 480,
      height: 560,
    },
  },
  {
    name: 'Полировка',
    title: 'от 40 тыс тенге',
    avatar: {
      src: '/img/7m.webp',
      width: 580,
      height: 580,
    },
  },
  {
    name: 'Химчистка',
    title: 'от 40 тыс тенге',
    avatar: {
      src: '/img/9m.webp',
      width: 580,
      height: 580,
    },
  },
];
</script>

<template>
  <LandingContainer>
    <LandingSectionhead>
      <template #title>О нас</template>
      <template #desc>Автоимперия 8 Миля.</template>
    </LandingSectionhead>

    <div class="flex flex-col gap-3 mx-auto max-w-4xl mt-16">
      <h2 class="font-bold text-3xl text-slate-200">
        Детейлинг 8 Миля – ведущий центр детейлинга в городе Алматы!
      </h2>
      <p class="text-lg leading-relaxed text-slate-500">
        Мы предлагаем полный спектр услуг по уходу за вашим автомобилем, чтобы он выглядел
        таким же блестящим и безупречным, как в день покупки.
      </p>
    </div>
    <div class="grid md:grid-cols-3 gap-10 mx-auto max-w-4xl mt-12">
      <div v-for="item of team" class="group">
        <div class="w-full aspect-square">
          <img
            :src="item.avatar.src"
            :width="item.avatar.width"
            :height="item.avatar.height"
            format="avif"
            :alt="item.name"
            class="w-full h-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl"
          />
        </div>

        <div class="mt-4 text-center">
          <h2 class="text-lg text-gray-400">{{ item.name }}</h2>
          <h3 class="text-sm text-slate-500">{{ item.title }}</h3>
        </div>
      </div>
    </div>

    <div class="flex flex-col gap-3 mx-auto max-w-4xl mt-16">
      <h3 class="font-bold text-3xl text-slate-200">Наша команда</h3>
      <p class="text-md leading-relaxed text-slate-500">
        Наша команда экспертов в области детейлинга обладает глубокими знаниями и
        многолетним опытом, чтобы обеспечить высококачественное обслуживание для всех
        типов и марок автомобилей. Мы используем только самое современное оборудование и
        профессиональные средства, чтобы предоставить вашему автомобилю лучший уход.
      </p>

      <video
        src="https://static.8milya.kz/video/okleika.mp4"
        height="1024"
        width="400"
        controls
        type="video/mp4"
      ></video>

      <p class="text-md leading-relaxed text-slate-500">
        Кроме того, мы гордимся нашими конкурентоспособными ценами и отличным сервисом. Мы
        понимаем, что ваше время – ценный ресурс, поэтому мы всегда стремимся выполнять
        работы быстро и эффективно, без ущерба для качества. Оставьте свой автомобиль
        нашим профессионалам, и мы сделаем все возможное, чтобы он восхищал вас своим
        идеальным состоянием.
      </p>
    </div>
    <LandingCta />
  </LandingContainer>
</template>
