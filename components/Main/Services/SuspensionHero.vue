<template>
    <section class="relative pb-20 min-h-[600px]">

        <div class="mb-10">
            <div class="mb-10">
                <h1 class="text-center text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-4">
                    Комплексный ремонт ходовой части за 1 день
                </h1>

                <p class="text-lg text-gray-300 text-center max-w-3xl mx-auto">
                    Точная регулировка углов установки колес с гарантией результата
                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Левая сторона -->
            <div class="space-y-8">

                <div class="mt-5 text-md text-slate-300">
                    <div class="flex flex-col gap-3">
                        <p class="text-2xl font-bold mb-2 text-white">
                            Полный комплекс работ по ремонту ходовой части</p>
                        От стука в подвеске до ухудшения управляемости — мы устраним любую неисправность. Проведем
                        компьютерную диагностику, точно определим изношенные детали (амортизаторы, шаровые опоры,
                        рулевые тяги, сайлентблоки) и заменим их на оригинальные или сертифицированные аналоги.
                        <br><br>
                        <p class="text-xl">Как мы работаем?</p>
                        ✔ Диагностика на стенде + тест-драйв <br>
                        ✔ Демонтаж старых узлов без повреждений <br>
                        ✔ Замена с применением профессионального инструмента <br>
                        ✔ Контрольный тест-драйв и проверка углов установки колес <br>
                        <br>
                        Даем гарантию на запчасти и работу — вы получаете предсказуемый результат и уверенность в
                        безопасности.
                    </div>
                </div>

                <a @click="orderStore.toggleOpen()"
                    class="bg-silver cursor-pointer text-black font-semibold rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center">
                    Выбрать масло и записаться
                </a>
            </div>

            <!-- Правая сторона -->
            <div class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg h-full max-h-[700px]">
                    <img src="/suspension1.JPG" alt="Автомобиль для покраски"
                        class="w-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl" />
                </div>
            </div>
        </div>
    </section>


    <div class="mb-20">
        <!-- Стильный заголовок -->
        <div class="relative mb-8">
            <h3 class="text-3xl md:text-4xl font-bold text-center">
                <span class="relative inline-block">
                    <span class="absolute -bottom-1 left-0 w-full h-1 transform -skew-x-12"></span>
                    <span class="relative px-2">Что мы ремонтируем</span>
                </span>
            </h3>
            <p class="text-center text-gray-400 mt-2">Комплексное восстановление всех узлов ходовой части</p>
        </div>

        <!-- Блоки с элементами -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Амортизаторы -->
            <div
                class="bg-gradient-to-br from-gray-800 to-gray-900 p-5 rounded-xl text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-gray-700">
                <p class="font-bold text-xl mb-2">
                    Амортизаторы</p>
                <p class="text-gray-300 text-sm">Замена, диагностика утечек, проверка отбоя</p>
            </div>

            <!-- Шаровые опоры -->
            <div
                class="bg-gradient-to-br from-gray-800 to-gray-900 p-5 rounded-xl text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-gray-700">
                <p class="font-bold text-xl mb-2">
                    Шаровые опоры</p>
                <p class="text-gray-300 text-sm">Люфт, заклинивание, разрушение пыльника</p>
            </div>

            <!-- Рулевые тяги -->
            <div
                class="bg-gradient-to-br from-gray-800 to-gray-900 p-5 rounded-xl text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-gray-700">
                <p class="font-bold text-xl mb-2">
                    Рулевые тяги</p>
                <p class="text-gray-300 text-sm">Регулировка схождения, замена наконечников</p>
            </div>

            <!-- Сайлентблоки -->
            <div
                class="bg-gradient-to-br from-gray-800 to-gray-900 p-5 rounded-xl text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-gray-700">
                <p class="font-bold text-xl mb-2">
                    Сайлентблоки</p>
                <p class="text-gray-300 text-sm">Резинометаллические шарниры рычагов</p>
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
import { useOrderStore } from '~/store/oder.store';
const orderStore = useOrderStore()

</script>