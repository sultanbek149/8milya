<template>
    <div class="relative pb-[100px]">
        <LandingNavbar />
    </div>

    <LandingContainer>

        <GeometryHero />

        <section>
            <h4 class="text-2xl md:text-4xl font-black mb-6 text-center uppercase">Наше оборудование</h4>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
                <div class="equipment-card p-8 rounded-lg">
                    <div class="text-3xl md:text-4xl mb-6 ">3D-стенд</div>
                    <p class="text-gray-300 mb-4">Современный компьютерный стенд Hunter Elite с 3D-сканированием колес
                    </p>
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

        <!-- <LandingOurServices /> -->

        <LandingWorkProcess />


        <LandingWhyChooseUs>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8 mb-16">
                <!-- Преимущество 1 -->
                <div class="feature-card p-6 xl:p-8 rounded-lg text-center">
                    <svg class="icon-pros" viewBox="0 0 24 24">
                        <path d="M12 2L4 7v10l8 5 8-5V7L12 2z" />
                        <path d="M12 12l8-5M12 12v10M12 12L4 7" />
                        <path d="M16 5.25l-4 2.5-4-2.5" />
                    </svg>
                    <h5 class="text-xl xl:text-2xl font-bold mb-2">Компьютерная диагностика</h5>
                    <p class="text-gray-300">Точные замеры углов установки колес на современном 3D-стенде</p>
                </div>

                <!-- Преимущество 2 -->
                <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
                    <svg class="icon-pros" viewBox="0 0 24 24">
                        <path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z" />
                    </svg>
                    <h5 class="text-xl xl:text-2xl font-bold mb-2">Регулировка всех параметров</h5>
                    <p class="text-gray-300">Полная настройка схождения, развала и кастора для идеальной управляемости
                    </p>
                </div>

                <!-- Преимущество 3 -->
                <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
                    <svg class="icon-pros" viewBox="0 0 24 24">
                        <path d="M3 21h18v-2H3v2zM21 8H3v10h18V8zM3 3v2h18V3H3z" />
                        <path d="M9 13h2v3H9zM13 13h2v3h-2z" />
                    </svg>
                    <h5 class="text-xl xl:text-2xl font-bold mb-2">Опытные мастера</h5>
                    <p class="text-gray-300">Специалисты с опытом от 10 лет</p>
                </div>
            </div>
        </LandingWhyChooseUs>


        <LandingSpecialOffer discountText="Скидка 10% на развал схождение до 30 июня"
            countdownText="Успейте до конца акции:" ctaText="Записаться на замер геометрии" wsLink="https://wa.me/..."
            imageSrc="/img/car-paint.webp" imageAlt="oil change service" />


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
  title: "Развал-схождение колес в Алматы — 3D регулировка с точностью 0,01° | Автосервис 8 Миля",
  description: "Точная компьютерная регулировка развала-схождения на 3D-стенде Hunter Elite. Устранение увода руля, экономия топлива до 15%, защита от преждевременного износа шин. Работаем со всеми марками авто. Запишитесь онлайн!"
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