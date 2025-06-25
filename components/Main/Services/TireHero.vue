<template>
    <section class="relative min-h-[600px] mb-10 lg:mb-20">

        <div class="mb-10">
            <h1 class="text-center text-xl md:text-2xl lg:text-4xl font-bold leading-tight mb-6">
                Профессиональный шиномонтаж и ремонт дисков любого размера
            </h1>

            <h2 class="text-md text-gray-300 text-center">
                Быстрая замена резины и профессиональный ремонт дисков с точной балансировкой
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Левая сторона -->
            <div class="space-y-8">

                <div class="mt-5 text-md text-slate-300">
                    <div class="flex flex-col gap-3">
                        <p class="text-2xl font-bold mb-2 text-white">
                            Вибрация на скорости? Биение руля? Колеса плохо держат дорогу?</p>
                        Выполняем сезонную замену резины (включая крупногабаритные колеса до 24") с
                        точной компьютерной балансировкой (до 0,1 г), устраняем
                        биение и деформации дисков после попадания в ямы (восьмерки, вмятины), восстанавливаем геометрию
                        литых и кованых дисков на итальянском оборудовании, предлагаем герметизацию бескамерных шин и
                        сезонное хранение резины – все работы выполняются за 30-60 минут с гарантией качества.
                        <!-- Прозрачные цены — вы видите стоимость до начала работ. -->
                        <p class="text-white">Время работы: 15-30 мин</p>

                    </div>
                </div>

                <a @click="orderStore.toggleOpen()"
                    class="bg-silver cursor-pointer text-black font-semibold rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center">
                    Записаться на шиномонтаж
                </a>
            </div>

            <!-- Правая сторона -->
            <div class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg h-full max-h-[700px]">
                    <img src="/tire-repair.webp" alt="Автомобиль для покраски"
                        class="w-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl" />
                </div>
            </div>
        </div>

        <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
            <div class="flex flex-col lg:flex-row-reverse gap-8 items-center justify-between">
                <div class="flex-1">
                    <p class="text-2xl font-bold mb-5">Летний шиномонтаж: быстрая замена резины + срочный ремонт дисков!</p>
                    <p class="text-[14x] text-slate-300">
                        Шиномонтаж для колес любого размера (включая редкие в нашем городе диски до 24") –
                        профессионально устраняем биение, восьмерки и вмятины на дисках после попадания в ямы,
                        предлагаем сезонное хранение шин с индивидуальными стеллажами, с особым акцентом на ремонт литых
                        дисков в летний сезон (прокатка, сварка, правка геометрии).

                        <br> <br>
                        Летний сезон — пик деформации дисков! После попадания в ямы диски получают скрытые повреждения,
                        что вызывает вибрацию на скорости, ускоряет износ подвески и создаёт дискомфорт при движении. Мы
                        не просто меняем резину — профессионально восстанавливаем геометрию дисков на итальянском
                        оборудовании, устраняя "восьмёрки" и радиальное биение. Ваши колёса снова будут как новые!
                    </p>


                    <ul class="list-disc pl-6 space-y-2 mt-2">
                    </ul>
                    <br>
                </div>
            </div>
        </div>


        <div class="mt-10 lg:mt-20">
            <!-- Стильный заголовок -->
            <div class="relative mb-8">
                <h3 class="text-3xl md:text-4xl font-bold text-center">
                    <span class="relative inline-block">
                        <!-- <span class="absolute -bottom-1 left-0 w-full h-1 bg-slate-600 transform -skew-x-12"></span> -->
                        <span class="relative px-2">Что мы предлагаем</span>
                    </span>
                </h3>
                <p class="text-center text-gray-400 mt-2">Шиномонтаж и ремонт дисков премиум-класса</p>
            </div>

            <!-- Блоки с элементами -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3 text-center">Работаем со всеми типами колёс:</p>
                    <div class="text-white text-sm space-y-2 text-center">
                        <p>Шины - летние/зимние/всесезонные (R13-R24)</p>
                        <p>Диски - стальные, литые, кованые, разборные</p>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3">Текущее обслуживание и мелкий ремонт:</p>
                    <div class="text-slate-300 text-sm space-y-2 text-center">
                        <p>Компьютерная балансировка (точность 0,1 г)</p>
                        <p>Ремонт дисков (прокатка, сварка, правка)</p>
                        <p>Герметизация бескамерных шин</p>
                        <p>Чистовая полировка дисков</p>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-r from-zinc-900 to-zinc-900 p-5 text-center hover:transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-800">
                    <p class="font-bold text-xl mb-3">Специализируемся на сложных случаях:</p>
                    <div class="text-slate-300 text-sm space-y-3 text-center">
                        <p>Крупногабаритные диски до 24"</p>
                        <p>Восстановление геометрии после ДТП</p>
                        <p>Устранение "восьмёрок" и радиального биения</p>
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
