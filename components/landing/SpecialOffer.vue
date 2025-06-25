<template>
    <!-- Специальное предложение -->
    <section class="pt-20  border-t border-gray-800 text-white">
        <div class="mx-auto">
            <!-- Таймер -->
            <div class="flex flex-col justify-center lg:flex-row items-center gap-10">
                <div class="md:flex-2">
                    <div class="text-center sm:px-6 mb-2">
                        <p class="text-lg sm:text-xl md:text-2xl mb-2 font-black uppercase">{{ title }}</p>
                        <p class="text-lg sm:text-xl font-bold text-red-500">{{ discountText }}</p>
                    </div>

                    <div class="sm:p-8 rounded-lg mb-6 lg:mb-12">
                        <p class="text-lg md:text-xl font-bold mb-6 text-center">До конца акции осталось:</p>
                        <div v-if="!isExpired" class="flex justify-center gap-4">
                            <div class="text-center">
                                <div class="text-3xl md:text-5xl font-bold">{{ days }}</div>
                                <div class="text-sm">дней</div>
                            </div>
                            <div class="text-3xl md:text-5xl font-bold">:</div>
                            <div class="text-center">
                                <div class="text-3xl md:text-5xl font-bold">{{ hours }}</div>
                                <div class="text-sm">часов</div>
                            </div>
                            <div class="text-3xl md:text-5xl font-bold">:</div>
                            <div class="text-center">
                                <div class="text-3xl md:text-5xl font-bold">{{ minutes }}</div>
                                <div class="text-sm">минут</div>
                            </div>
                            <div class="text-3xl md:text-5xl font-bold">:</div>
                            <div class="text-center">
                                <div class="text-3xl md:text-5xl font-bold">{{ seconds }}</div>
                                <div class="text-sm">секунд</div>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка CTA -->
                    <div class="text-center sm:px-6 md:px-12">
                        <a :href="info.wsLink"
                            class="bg-silver text-black font-semibold rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center"
                            target="_blank" rel="noopener" noreferrer>
                            {{ ctaText }}
                        </a>
                    </div>
                </div>

                <div class="lg:flex-1">
                    <img :src="imageSrc" alt="cr" class="h-[350px] md:h-[500px] w-[700px] object-cover">
                </div>
            </div>

        </div>
    </section>
</template>

<script lang="ts" setup>
import { useInfo } from '@/composable/phone';
import { onMounted, onBeforeUnmount, ref } from 'vue';

interface Props {
    title?: string;
    discountText?: string;
    ctaText?: string;
    imageSrc?: string;
}

const props = withDefaults(defineProps<Props>(), {
    title: 'Специальное предложение',
    discountText: 'Скидка 10% на локальную покраску до 30 июня',
    ctaText: 'Записаться на замер геометрии',
    imageSrc: '/img/car-paint.webp',
    // imageAlt: 'car painting',
});

const info = useInfo();

// Дата окончания акции (30 июня текущего года)
const currentYear = new Date().getFullYear();
const endDate = new Date(currentYear, 5, 30, 23, 59, 59).getTime();

// Реактивные данные с немедленным вычислением
const now = ref(Date.now());
const distance = ref(endDate - now.value);

const days = ref(Math.floor(distance.value / (1000 * 60 * 60 * 24)).toString().padStart(2, '0'));
const hours = ref(Math.floor((distance.value % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0'));
const minutes = ref(Math.floor((distance.value % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0'));
const seconds = ref(Math.floor((distance.value % (1000 * 60)) / 1000).toString().padStart(2, '0'));
const isExpired = ref(distance.value < 0);

let countdownInterval: number | null = null;

// Функция обновления таймера
const updateCountdown = () => {
    now.value = Date.now();
    distance.value = endDate - now.value;

    if (distance.value < 0) {
        isExpired.value = true;
        if (countdownInterval) clearInterval(countdownInterval);
        return;
    }

    days.value = Math.floor(distance.value / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
    hours.value = Math.floor((distance.value % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
    minutes.value = Math.floor((distance.value % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
    seconds.value = Math.floor((distance.value % (1000 * 60)) / 1000).toString().padStart(2, '0');
};

// Хуки жизненного цикла
onMounted(() => {
    updateCountdown(); // Сразу обновляем таймер
    countdownInterval = window.setInterval(updateCountdown, 1000);
});

onBeforeUnmount(() => {
    if (countdownInterval) clearInterval(countdownInterval);
});
</script>


<style scoped></style>