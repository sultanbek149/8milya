<template>
    <div class="relative pb-[100px]">
        <LandingNavbar />
    </div>

    <LandingContainer>

        <ElectricalHero />

        <div class="max-w-4xl mx-auto p-4">
            <h2 class="text-xl font-bold text-center mb-4">Прайс-лист услуг автоэлектрика</h2>

            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-b-2 border-black">
                        <th class="text-left py-2 px-2 font-semibold">Услуга</th>
                        <th class="text-right py-2 px-2 font-semibold">Цена</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ремонт электросистем -->
                    <tr class="border-b border-gray-300">
                        <td colspan="2" class="py-2 px-2 font-medium">Ремонт электросистем</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Компьютерная диагностика</td>
                        <td class="py-2 px-2 text-right">1 500 т</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Сброс ошибок ЭБУ</td>
                        <td class="py-2 px-2 text-right">1 200 т</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Перепрошивка блока управления</td>
                        <td class="py-2 px-2 text-right">от 3 500 т</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="ps-8 py-2 px-2">Ремонт генератора/стартера</td>
                        <td class="py-2 px-2 text-right">от 2 800 т</td>
                    </tr>

                    <!-- Работа с ключами -->
                    <tr class="border-b border-gray-300">
                        <td colspan="2" class="py-2 px-2 font-medium">Работа с ключами</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Изготовление ключа с чипом</td>
                        <td class="py-2 px-2 text-right">2 700 т</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Программирование брелока</td>
                        <td class="py-2 px-2 text-right">1 800 т</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="ps-8 py-2 px-2">Экстренное вскрытие авто</td>
                        <td class="py-2 px-2 text-right">3 500 т</td>
                    </tr>

                    <!-- Мультимедиа и комфорт -->
                    <tr class="border-b border-gray-300">
                        <td colspan="2" class="py-2 px-2 font-medium">Мультимедиа и комфорт</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Установка парктроника (4 датчика)</td>
                        <td class="py-2 px-2 text-right">6 900 т</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Монтаж камеры заднего вида</td>
                        <td class="py-2 px-2 text-right">4 500 т</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Подключение автозапуска</td>
                        <td class="py-2 px-2 text-right">8 900 т</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="ps-8 py-2 px-2">Активация CarPlay/Android Auto</td>
                        <td class="py-2 px-2 text-right">3 900 т</td>
                    </tr>

                    <!-- Спецпредложения -->
                    <tr class="border-b border-gray-300">
                        <td colspan="2" class="py-2 px-2 font-medium">Спецпредложения</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="ps-8 py-2 px-2">Комплексная диагностика + сброс ошибок</td>
                        <td class="py-2 px-2 text-right">2 200 т <span class="text-sm line-through text-gray-500">2
                                700 т</span></td>
                    </tr>
                    <tr>
                        <td class="ps-8 py-2 px-2">Пакет "Под ключ" (2 ключа)</td>
                        <td class="py-2 px-2 text-right">5 900 т <span class="text-sm line-through text-gray-500">7
                                200 т</span></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <LandingSpecialOffer discountText="Скидка 10% на ремонт электроники до 30 июня"
            countdownText="Успейте воспользоваться:" ctaText="Получить консультацию электрика"
            imageSrc="/electrical-offer.jpg" imageAlt="Ремонт ходовой части " />


        <LandingLogos />

        <LandingContactCard />

    </LandingContainer>


    <LandingFooter />

</template>

<script lang="ts" setup>
import ElectricalHero from '@/components/Main/Services/ElectricalHero.vue';



useSeoMeta({
    title: "Ремонт автоэлектрики в Алматы | Диагностика и ремонт ЭБУ, ключей, проводки | 8 Миля",
    description: "Профессиональный ремонт электронных систем: компьютерная диагностика, перепрошивка ЭБУ, программирование ключей. Оборудование Autel/Bosch. Гарантия на работы. Особые условия для гибридных авто. Запишитесь на бесплатную диагностику!"
});
</script>

<style scoped>
/* 
* {
    border: 1px solid red;
} */
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