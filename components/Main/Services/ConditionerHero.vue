<template>
    <section class="relative min-h-[600px]">

        <div class="mb-10">
            <h1 class="text-center text-xl md:text-2xl lg:text-4xl font-bold leading-tight mb-6">
                Профессиональная заправка кондиционеров по стандартам Porsche, Mercedes, BMW

            </h1>

            <h2 class="text-md text-gray-300 text-center">
                Заправка кондиционера с точностью до грамма
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Левая сторона -->
            <div class="space-y-8">

                <div class="mt-5 text-md text-slate-300">
                    <div class="flex flex-col gap-3">
                        <p class="text-2xl font-bold mb-2 text-white">
                            Когда нужна заправка кондиционера?</p>
                        Система требует регулярного обслуживания каждые 1–2 года, даже если нет явных проблем. Обратите
                        внимание на признаки:
                        <br>
                        <ul class="list-disc pl-6 space-y-2">

                            <li>
                                Слабый холод (воздух недостаточно охлаждает)
                            </li>
                            <li>
                                Неприятный запах (плесень, сырость при включении)
                            </li>
                            <li>
                                Долгое охлаждение (кондиционер медленно набирает температуру)
                            </li>
                            <li>
                                Посторонние шумы (шипение, бульканье — возможна утечка фреона)
                            </li>
                        </ul>
                        Регулярная заправка кондиционера — это не просто комфорт, а защита дорогостоящих компонентов от
                        преждевременного износа. Мы предлагаем полный комплекс услуг с использованием профессионального
                        оборудования и оригинальных хладагентов.

                    </div>
                </div>

                <p>Время работы: 15-30 мин</p>


                <a @click="orderStore.toggleOpen()"
                    class="bg-silver cursor-pointer text-black font-semibold rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center">
                    Пройти диагностику двигателя
                </a>
            </div>

            <!-- Правая сторона -->
            <div class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg h-full max-h-[700px]">
                    <img src="/engine-repair.jpeg" alt="Автомобиль для покраски"
                        class="w-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl" />
                </div>
            </div>
        </div>


        <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
            <div class="flex flex-col lg:flex-row-reverse gap-8 items-center justify-between">
                <div class="flex-1">
                    <p class="text-2xl font-bold mb-5">Профессиональная заправка кондиционера с точностью до грамма</p>
                    <p class="text-[14x] text-slate-300">
                        Профессиональная заправка кондиционера на итальянском оборудовании, соответствующем заводским
                        стандартам <strong>Porsche, Mercedes и BMW</strong>: точная дозировка фреона и масла без
                        переливов/недоливов, встроенный детектор поддельного хладагента (исключаем 50% смеси), полное
                        вакуумирование системы для удаления влаги и старых газов.
                        <br><br>
                        В отличие от кустарных сервисов, мы не используем примитивные насосы — только 100% европейский
                        фреон премиум-класса.
                    </p>

                    <br>
                    <p class="my-2">Последствия экономии:</p>

                    <ul class="list-disc pl-6 space-y-2">
                        <li>
                            недозаправка (перегрев системы)
                        </li>
                        <li>
                            фальшивый фреон (испаряется за 6 месяцев)
                        </li>
                        <li>
                            поломка компрессора и плесень в воздуховодах.
                        </li>
                        <li>
                            Посторонние шумы (шипение, бульканье — возможна утечка фреона)
                        </li>
                    </ul>
                    <br>
                    <p class="text-[14x] text-white">
                        Работаем в сертифицированном центре, а не «у обочины».
                    </p>
                </div>
                <div class="flex-1 flex items-center justify-center my-2">
                    <img src="/zapravka.jpg" alt="" class="lg:h-[400px] object-cover rounded-lg" />
                </div>
            </div>
        </div>

        <div class="mt-20">
            <!-- Стильный заголовок -->
            <div class="relative mb-8">
                <h3 class="text-3xl md:text-4xl font-bold text-center">
                    <span class="relative inline-block">
                        <!-- <span class="absolute -bottom-1 left-0 w-full h-1 bg-slate-600 transform -skew-x-12"></span> -->
                        <span class="relative px-2">Что мы предлагаем</span>
                    </span>
                </h3>
                <p class="text-center text-gray-400 mt-2">Комплексное обслуживание кондиционера</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3 text-center">Глубокая очистка системы</p>
                    <div class="text-slate-300 text-sm space-y-3 text-center">
                        <p>Вакуумирование (15+ минут) – удаление влаги и старых газов</p>
                        <p>Промывка магистралей при коррозии или засорах</p>
                        <p>Антибактериальная обработка испарителя – устраняет плесень и запахи</p>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3">Точная заправка</p>
                    <div class="text-slate-300 text-sm space-y-2 text-center">
                        <p>Автоматическая дозировка фреона по весу (погрешность ±1 грамма)</p>
                        <p>Добавление специального масла для компрессора</p>
                        <p>Проверка герметичности под давлением</p>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3">Дополнительные услуги</p>
                    <div class="text-slate-300 text-sm space-y-3 text-center">
                        <p>Замена ресивера-осушителя (рекомендуется каждые 3-5 лет)</p>
                        <p>Диагностика компрессора и электропроводки</p>
                        <p>Чистка дренажной системы</p>
                    </div>
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
