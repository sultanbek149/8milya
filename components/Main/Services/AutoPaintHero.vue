<template>
    <section class="relative min-h-[600px] mb-20">

        <div class="mb-10">
            <h1 class="text-center text-xl md:text-2xl lg:text-4xl font-bold leading-tight mb-6">
                 Профессиональная покраска и кузовной ремонт за 1 день
            </h1>

            <h2 class="text-md text-gray-300 text-center">
                Профессиональное восстановление лакокрасочного покрытия и геометрии кузова
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Левая сторона -->
            <div class="space-y-8">

                <div class="mt-5 text-md text-slate-300">
                    <div class="flex flex-col gap-3">
                        <di class="text-2xl font-bold mb-2 text-white">
                            Идеальная покраска и кузовной ремонт за 1 день!</di>
                        Восстанавливаем заводской вид автомобиля после ДТП, сколов и коррозии. Используем качественные
                        материалы и профессиональную окрасочную камеру для безупречного результата. Точно подбираем цвет
                        по VIN, гарантируем отсутствие "шагрени" и цветовых переходов.

                        <br><br>
                        Наши мастера выполняют кузовной ремонт и покраску по стандартам официальных автосервисов:

                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                Безупречное совпадение цвета благодаря спектрофотометру и базе 5000+ оттенков
                            </li>
                            <li>
                                Полное восстановление геометрии на немецком стапеле Celette
                            </li>
                            <li>
                                Заводская толщина ЛКП (120-180 микрон), контролируемая электронным толщиномером
                            </li>
                        </ul>
                        Ваш автомобиль получит 100% защиту от коррозии и первозданный внешний вид, как с конвейера.
                    </div>
                </div>


                <a @click="orderStore.toggleOpen()"
                    class="bg-silver cursor-pointer text-black font-semibold rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center">
                    Получить расчет стоимости за 15 минут
                </a>
            </div>

            <!-- Правая сторона -->
            <div class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg h-full max-h-[700px]">
                    <img src="/autobody.webp" alt="Автомобиль для покраски"
                        class="w-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl" />
                </div>
            </div>
        </div>

    </section>

</template>

<script lang="ts" setup>
import Swiper from '@/components/Main/Services/Swiper.vue'
import { useOrderStore } from '~/store/oder.store';
const orderStore = useOrderStore()

</script>
