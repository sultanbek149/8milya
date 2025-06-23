<template>
    <section class="pb-16 px-4 max-w-7xl mx-auto">
        <p class="text-3xl lg:text-4xl font-bold text-center mb-1.5">{{ title }}</p>
        <p class="text-lg lg:text-xl text-center mb-8 max-w-3xl mx-auto text-slate-400">{{ subtitle }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div v-for="(step, index) in steps" :key="index" class="flex flex-col items-center text-center">
                <div
                    class="w-16 h-16 border-white border-2 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-2 lg:mb-4">
                    {{ index + 1 }}
                </div>
                <p class="text-lg font-bold mb-1 lg:mb-2">{{ step.title }}</p>
                <p class="text-gray-400">{{ step.description }}</p>
            </div>
        </div>
    </section>
</template>

<script lang="ts" setup>
interface Step {
  title: string;
  description: string;
}

interface Props {
  title?: string;
  subtitle?: string;
  steps?: Step[];
}

const props = withDefaults(defineProps<Props>(), {
  title: 'Как мы работаем',
  subtitle: '4 простых шага от заявки до результата',
  steps: () => [
    {
      title: 'Заявка',
      description: 'Вы оставляете заявку на сайте или по телефону'
    },
    {
      title: 'Диагностика и оценка',
      description: 'Бесплатно в течение часа'
    },
    {
      title: 'Ремонт',
      description: 'Фиксированные сроки, фото-отчет'
    },
    {
      title: 'Передача автомобиля',
      description: 'С гарантийным талоном'
    }
  ]
});
</script>