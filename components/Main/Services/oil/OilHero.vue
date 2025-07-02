<template>
    <section class="relative pb-20 min-h-[600px]">

        <div class="mb-10">
            <h1 class="text-center text-xl md:text-2xl lg:text-4xl font-bold leading-tight mb-6">
                Профессиональная замена масла за 20 минут
            </h1>

            <h2 class="text-md text-gray-300 text-center">
                Запишитесь сегодня на бесплатную замену масла (при покупке масла на сервисе)
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Левая сторона -->
            <div class="space-y-8">

                <div class="mt-5 text-md text-slate-300">
                    <div class="flex flex-col gap-3">
                        <p class="text-2xl font-bold mb-2 text-white">Премиальная замена масел и жидкостей</p>
                        Мы предлагаем полный комплекс услуг: от замены моторного и трансмиссионного масла до
                        обслуживания АКПП (с аппаратной заменой и адаптацией), МКПП, редукторов мостов, а также замену
                        тормозной и охлаждающей жидкостей. Все работы выполняются за 15-30 минут с точным соблюдением
                        заводских спецификаций. Наши мастера проведут диагностику состояния жидкостей, подберут
                        оптимальное масло по VIN-коду вашего автомобиля и используют только оригинальные фильтрующие
                        элементы. Дополнительно предлагаем замену воздушных, салонных и топливных фильтров (включая
                        погружные модули).
                    </div>
                </div>

                <p>Время работы: 20-40 мин</p>

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
                    Записаться на заправку
                </a>
            </div>

            <!-- Правая сторона -->
            <div class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg h-full max-h-[700px]">
                    <img src="/img/oil-car.jpg" alt="Автомобиль для покраски" class="w-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl"/>
                </div>
            </div>
        </div>
    </section>
</template>

<script lang="ts" setup>
import { useOrderStore } from '~/store/oder.store';
const orderStore = useOrderStore()

</script>