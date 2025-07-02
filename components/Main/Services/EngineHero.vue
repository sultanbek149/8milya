<template>
    <section class="relative min-h-[600px]">

        <div class="mb-10">
            <h1 class="text-center text-xl md:text-2xl lg:text-4xl font-bold leading-tight mb-6">
                Комплексное восстановление двигателей любой сложности: устраним стуки, перегрев и потерю мощности
            </h1>

            <h2 class="text-md text-gray-300 text-center">
                Качественное решение любых проблем двигателя - от текущего обслуживания до сложного восстановления
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Левая сторона -->
            <div class="space-y-8">

                <div class="mt-5 text-md text-slate-300">
                    <div class="flex flex-col gap-3">
                        <p class="text-2xl font-bold mb-2 text-white">
                            Застучал двигатель? Появились рывки, повышенный расход или потеря мощности?</p>
                        Точная диагностика — 90% успешного ремонта. Наши специалисты проводят полную проверку с
                        использованием профессионального диагностического оборудования:
                        <br>
                        <li>
                            Замер компрессии в цилиндрах (выявление износа ЦПГ)
                        </li>
                        <li>
                            Тест на утечки (проверка герметичности камер сгорания)
                        </li>

                        Диагностика топливной системы:

                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                Чистка форсунок высокого/низкого давления на профессиональным оборудовании
                            </li>
                            <li>
                                Проверка производительности ТНВД
                            </li>
                            <li>
                                Анализ обратного слива топлива
                            </li>
                        </ul>

                        Диагностика электронноки:

                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                Считывание ошибок с расшифровкой кодов
                            </li>
                            <li>
                                Анализ реальных параметров работы в движении
                            </li>
                        </ul>

                        Замена агрегатов с проверкой на стенде:

                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                Свечи зажигания/накала с адаптацией
                            </li>
                            <li>
                                Катушки зажигания
                            </li>
                            <li>
                                Датчики ЭСУД
                            </li>
                        </ul>
                        Мы не просто находим проблему — показываем её вам: <br>
                        → Видеоотчёт с тепловизора при проверке системы охлаждения <br>
                        → Графики компрессии по цилиндрам с расшифровкой <br>
                        → Сравнительные тесты форсунок до/после чистки
                        <br><br>
                        Прозрачные цены — вы видите стоимость до начала работ.
                    </div>
                </div>

                <a @click="orderStore.toggleOpen()"
                    class="bg-silver cursor-pointer text-black font-semibold rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center">
                    Пройти диагностику двигателя
                </a>
            </div>

            <!-- Правая сторона -->
            <div class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg h-full max-h-[700px]">
                    <img src="/engine1.jpg" alt="Автомобиль для покраски"
                        class="w-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl" />
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
                <p class="text-center text-gray-400 mt-2">Комплексное восстановление всех систем двигателя</p>
            </div>

            <!-- Блоки с элементами -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3 text-center">Капитальный ремонт двигателя</p>
                    <div class="text-slate-300 text-sm space-y-3 text-center">
                        <p>Гильзовка блока цилиндров (расточка, хонингование, замена
                            гильз)</p>
                        <p>Ремонт ГБЦ (шлифовка плоскости, замена клапанов, седел,
                            направляющих)</p>
                        <p>Замена поршневой группы (поршни, кольца, пальцы, вкладыши
                            коленвала)</p>
                        <p>Ремонт коленчатого вала (шлифовка шеек, замена сальников)</p>
                        <p>Чистка масляных каналов, замена маслонасоса</p>
                        <p>Ремонт турбин (диагностика, замена картриджей, балансировка)
                        </p>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3">Текущее обслуживание и мелкий ремонт:</p>
                    <div class="text-slate-300 text-sm space-y-2 text-center">
                        <p>Замена цепи/ремня ГРМ с регулировкой меток</p>
                        <p>Чистка форсунок, замена топливных фильтров</p>
                        <p>Устранение течей масла (замена сальников, прокладок)</p>
                        <p>Регулировка клапанов (гидрокомпенсаторов)</p>
                        <p>Замена свечей, катушек зажигания, датчиков</p>
                        <p>Промывка системы охлаждения, замена антифриза</p>
                        <p>Чип-тюнинг, адаптация ЭБУ</p>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3">Диагностика перед ремонтом:</p>
                    <div class="text-slate-300 text-sm space-y-3 text-center">
                        <p>Замер компрессии и утечек в цилиндрах</p>
                        <p>Анализ состояния масла (металлография)</p>
                        <p>Проверка давления топлива и работы ТНВД</p>
                        <p>Эндоскопия цилиндров без разборки</p>
                        <p>Компьютерная диагностика ошибок ЭБУ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script lang="ts" setup>
import { useOrderStore } from '~/store/oder.store';
const orderStore = useOrderStore()

</script>
