<template>
    <div class="relative pb-[100px]">
        <LandingNavbar />
    </div>

    <LandingContainer>

        <ConditionerHero />



        <LandingWhyChooseUs>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8 mb-16">
                <!-- Преимущество 1 -->
                <div class="feature-card p-6 xl:p-8 rounded-lg text-center">
                    <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                    <h5 class="text-xl xl:text-2xl font-bold mb-2">Комплексная проверка</h5>
                    <p class="text-gray-300">Полный анализ состояния подвески с использованием диагностического
                        оборудования</p>
                </div>

                <!-- Преимущество 2 (по заводским стандартам) -->
                <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
                    <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <h5 class="text-xl xl:text-2xl font-bold mb-2">Работа по заводским стандартам</h5>
                    <p class="text-gray-300">Строгое соблюдение технологических карт и требований производителя</p>
                </div>

                <!-- Преимущество 3 (заправка кондиционера) -->
                <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
                    <svg class="icon-pros" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h5 class="text-xl xl:text-2xl font-bold mb-2">Заправка кондиционера</h5>
                    <p class="text-gray-300">Профессиональная заправка хладагентом по спецификациям автопроизводителя
                    </p>
                </div>
            </div>
        </LandingWhyChooseUs>

        <LandingSpecialOffer discountText="Скидка 10% на заправку кондиционера до 30 июня"
            countdownText="Успейте воспользоваться:" ctaText="Записаться на заправку"
            imageSrc="/conditioner-offer.jpg" imageAlt="Ремонт ходовой части " />


        <LandingLogos />

        <LandingContactCard />

    </LandingContainer>


    <LandingFooter />

</template>

<script lang="ts" setup>
import ConditionerHero from '@/components/Main/Services/ConditionerHero.vue';



useSeoMeta({
    title: `Профессиональная замена масла в Алматы - 8 Миля`,
    description: `Комплексные услуги по замене масла для автомобилей всех марок и моделей`,
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