<template>
    <section class="relative pb-20 min-h-[600px]">

        <div class="mb-10">
            <h1 class="text-center text-xl md:text-2xl lg:text-4xl font-bold leading-tight mb-6">
                Развал-схождение с точностью 0,01° — безопасность на дороге, экономия топлива и ровный износ шин
            </h1>

            <h2 class="text-md text-gray-300 text-center">
                Высококачественные услуги для вашего автомобиля
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Левая сторона -->
            <div class="space-y-8">

                <div class="mt-5 text-md text-slate-300">
                    <div class="flex flex-col gap-3">
                        <p class="text-2xl font-bold mb-2 text-white">Ваш автомобиль уводит в сторону? Шины изнашиваются
                            за 2-3 месяца?</p>

                        Это явные признаки нарушенной геометрии колёс. Езда с неправильным развалом-схождением — это:

                        <ul class="list-disc pl-5 space-y-2">
                            <li>Риск аварии — машина хуже держит дорогу, особенно на мокром асфальте и зимой. Автомобиль
                                уводит в сторону даже при отпущенном руле.</li>
                            <li>Перерасход топлива (до +15% к затратам)</li>
                            <li>Ускоренный износ шин (резина стирается за сезон)</li>
                        </ul>

                        Неправильная настройка развала и схождения может стоить вам не только новых шин, но и контроля
                        над дорогой.
                        <br> <br>
                        Мы используем передовое оборудование — 3D-стенд и лазерную линейку, чтобы точно измерить и
                        отрегулировать геометрию с гарантией до 0,01°. Это значит:
                        <br> <br>

                        <li>Меньший расход топлива</li>

                        <li>Равномерный износ шин</li>

                        <li>Максимальная безопасность в любой ситуации</li>

                        <br>
                        Не откладывайте — это простая процедура, которая может спасти жизнь и точно сэкономит деньги.
                    </div>
                </div>

                <!-- <div class="space-y-3">
            <h3 class="text-xl font-semibold mb-4">Наши преимущества:</h3>
            <div class="space-y-2">
              <p class="flex items-start">
                <span class="text-black mr-2">•</span>
                Быстрое обслуживание
              </p>
              <p class="flex items-start">
                <span class="text-black mr-2">•</span>
                Качественные материалы
              </p>
              <p class="flex items-start">
                <span class="text-black mr-2">•</span>
                Гарантия 3 года
              </p>
            </div>
          </div> -->

                <a @click="orderStore.toggleOpen()"
                    class="bg-silver cursor-pointer text-black font-semibold rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center">
                    Записаться
                </a>
            </div>

            <!-- Правая сторона -->
            <div class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="/img/geometry.webp" alt="Автомобиль для покраски" class="w-full h-auto" />
                </div>
            </div>
        </div>
    </section>
</template>

<script lang="ts" setup>
import { useOrderStore } from '~/store/oder.store';
const orderStore = useOrderStore()

</script>