<template>
    <section class="relative min-h-[600px]">

        <div class="mb-10">
            <h1 class="text-center text-xl md:text-2xl lg:text-4xl font-bold leading-tight mb-6">
                Ремонт автоэлектрики любой сложности – профессиональная диагностика и ремонт современных электронных
                систем
            </h1>

            <h2 class="text-md text-gray-300 text-center">
                Опытные мастера с современным оборудованием: от диагностики ЭБУ до программирования ключей и адаптации
                блоков управления
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Левая сторона -->
            <div class="space-y-8">

                <div class="mt-5 text-md text-slate-300">
                    <div class="flex flex-col gap-3">
                        <p class="text-2xl font-bold mb-2 text-white">
                            Профессиональный ремонт автоэлектрики</p>
                        Наша сервисная служба специализируется на комплексном ремонте и диагностике современных систем
                        автоэлектрики. С помощью профессионального оборудования мы точно определяем и устраняем
                        неисправности в электронных системах любой
                        сложности: от сброса ошибок ЭБУ и перепрошивки бортовых компьютеров до ремонта генераторов,
                        стартеров и программирования ключей. Особое внимание уделяем гибридным и электрическим
                        автомобилям — наши мастера прошли специальное обучение работе с высоковольтными системами.
                        Гарантируем соблюдение заводских стандартов и использование оригинальных компонентов при
                        ремонте.
                        <br><br>
                        10+ лет опыта работы с современными
                        электронными системами:
                        от компьютерной диагностики до сложного ремонта гибридных систем. Используем
                        оригинальные сканеры Autel, Bosch и осциллографы для точного
                        определения неисправностей.

                    </div>
                </div>


                <a @click="orderStore.toggleOpen()"
                    class="bg-silver cursor-pointer text-black font-semibold rounded-lg py-2 px-6 mt-4 w-full flex justify-center text-center">
                    Получить консультацию электрика
                </a>
            </div>

            <!-- Правая сторона -->
            <div class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg h-full max-h-[700px]">
                    <img src="/electrical-repair.jpg" alt="Автомобиль для покраски"
                        class="w-full object-cover rounded transition group-hover:-translate-y-1 group-hover:shadow-xl" />
                </div>
            </div>
        </div>




        <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
            <div class="flex flex-col lg:flex-row-reverse gap-8 items-center justify-between">
                <div class="flex-1">
                    <p class="text-2xl font-bold mb-5">Ремонт бортовых компьютеров и электронных систем</p>
                    <p class="text-[14x] text-slate-300">
                        сброс ошибок и устранение "ЧЕКА", профессиональная
                        перепрошивка и адаптация блоков управления (ЭБУ), замена сим-карт в системах телематики, полная
                        русификация китайских автомобилей. Наши специалисты работают с использованием оригинального
                        диагностического оборудования, гарантируя точное определение неисправностей и качественный
                        ремонт любой сложности. Восстанавливаем работоспособность всех электронных систем автомобиля в
                        строгом соответствии с техническими требованиями производителей.

                    </p>
                    <br>
                    Выполняем полный комплекс работ :
                    <br>
                    <ul class="list-disc pl-6 space-y-2 mt-2">
                        <li>
                            Сброс ошибок и устранение "ЧЕКА"<br>
                        </li>
                        <li>
                            Профессиональная
                            перепрошивка и адаптация блоков управления (ЭБУ)
                        </li>
                        <li>
                            Замена сим-карт в системах телематики
                        </li>
                        <li>
                            Полная
                            русификация китайских автомобилей
                        </li>

                    </ul>
                    <br>
                    Наши специалисты работают с использованием оригинального
                    диагностического оборудования, гарантируя точное определение неисправностей и качественный
                    ремонт любой сложности. Восстанавливаем работоспособность всех электронных систем автомобиля в
                    строгом соответствии с техническими требованиями производителей.
                </div>
            </div>
        </div>


        <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
            <div class="flex flex-col lg:flex-row-reverse gap-8 items-center justify-between">
                <div class="flex-1">
                    <p class="text-2xl font-bold mb-5">Диагностика электросистем автомобиля</p>
                    <p class="text-[14x] text-slate-300">
                        Наш сервис выполняет полную компьютерную диагностику всех электронных систем автомобиля с
                        использованием профессионального оборудования. Мы проводим:

                        Комплексную проверку <strong>ЭБУ (двигателя, АКПП, ABS, ESP)</strong> с расшифровкой кодов
                        ошибок

                        Тестирование генератора и стартера под нагрузкой с анализом осциллограмм

                        Диагностику состояния проводки (сопротивление, пробои, коррозия контактов)

                        Проверку CAN-шины и цифровых шин данных
                    </p>
                    <br>
                    Для точного определения неисправностей используем:
                    <br>
                    <ul class="list-disc pl-6 space-y-2 mt-2">
                        <li>
                            Диагностические сканеры последнего поколения<br>

                        </li>
                        <li>
                            Мотор-тестеры и осциллографы для анализа сигналов в реальном времени <br>

                        </li>
                        <li>
                            Тепловизоры для выявления перегревающихся участков цепи <br>

                        </li>
                        <li>
                            Мегаомметры для проверки изоляции высоковольтных систем
                        </li>
                    </ul>
                    <br>
                    Проверяем проводку до последнего контакта!
                </div>
                <div class="flex-1 flex items-center justify-center my-2">
                    <img src="/electrical2.jpg" alt="" class="lg:h-[400px] object-cover rounded-lg" />
                </div>
            </div>
        </div>


        <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100 mb-20">
            <div class="flex flex-col lg:flex-row-reverse gap-8 items-center justify-between">
                <div class="flex-1">
                    <p class="text-2xl font-bold mb-5">Комплексные услуги по автоэлектронике и системам комфорта</p>
                    <p class="text-[14x] text-slate-300">
                        Мы выполняем:
                        <br>
                    <ul class="list-disc pl-6 space-y-2 mt-2">
                        <li>
                            Точную диагностику с помощью цифровых осциллографов - выявляем даже скрытые неисправности
                            проводки и датчиков<br>
                        </li>
                    </ul>
                    <br>
                    Полный цикл работ с ключами:
                    <br>
                    <ul class="list-disc pl-6 space-y-2 mt-2">
                        <li>
                            Программирование новых чип-ключей
                            <br>
                        </li>
                        <li>
                            Восстановление утерянных ключей
                            <br>
                        </li>
                        <li>
                            Ремонт брелоков и иммобилайзеров
                            <br>
                        </li>
                        <li>
                            Аварийное вскрытие авто при утере ключей
                            <br>
                        </li>
                    </ul>
                    <br>
                    Настройку мультимедиа:
                    <br>
                    <ul class="list-disc pl-6 space-y-2 mt-2">
                        <li>
                            Активация Apple CarPlay/Android Auto

                            <br>
                        </li>
                        <li>
                            Русификация головных устройств

                            <br>
                        </li>
                        <li>
                            Устранение программных сбоев
                            <br>
                        </li>
                    </ul>
                    <br>
                    Установку дополнительного оборудования:
                    <br>
                    <ul class="list-disc pl-6 space-y-2 mt-2">
                        <li>
                            Парктроники и камеры 360°
                            <br>
                        </li>
                        <li>
                            Обогрев сидений и руля
                            <br>
                        </li>
                        <li>
                            Премиум-акустика
                            <br>
                        </li>
                    </ul>
                    </p>
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
