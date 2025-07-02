<template>
    <!-- Почему выбирают нас -->
    <section class="pt-16 pb-10 px-4 border-t border-b border-gray-800">
        <div class="container mx-auto max-w-6xl">
            <p class="text-3xl md:text-4xl font-black mb-8 text-center uppercase">Почему выбирают нас</p>

            <slot />

            <!-- Сертификаты -->
            <!-- <div class="text-center">
                <h5 class="text-3xl font-black mb-6 lg:mb-12 uppercase pb-4">Наши сертификаты</h5>
                <div class="flex flex-wrap justify-center items-center gap-12 px-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/PPG_Industries_logo.svg" alt="PPG"
                        class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7f/BASF_logo.svg" alt="BASF"
                        class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/3M_logo.svg" alt="3M"
                        class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Sikkens_logo.svg" alt="Sikkens"
                        class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Spies_Hecker_Logo.svg"
                        alt="Spies Hecker" class="partner-logo">
                </div>
            </div> -->

            <!-- <div class="text-center">
                <button class="bg-white text-black px-8 py-4 font-bold hover:bg-gray-200 transition duration-300">
                    Получить консультацию
                </button>
            </div> -->
        </div>
    </section>
</template>


<style>
.feature-card {
    border: 1px solid #333;
    transition: all 0.3s ease;
}

.feature-card:hover {
    border-color: #fff;
    /* transform: translateY(-5px); */
}

.partner-logo {
    /* filter: grayscale(100%) brightness(2); */
    /* transition: all 0.3s ease; */
    /* opacity: 0.8; */
    /* max-height: 80px; */
    max-width: 180px;
} 

/* .partner-logo:hover {
    opacity: 1;
    filter: grayscale(0%) brightness(1);
} */

.certificate {
    border: 1px solid #333;
    transition: all 0.3s ease;
}

.certificate:hover {
    border-color: #fff;
    transform: scale(1.05);
}

.icon-pros {
    width: 60px;
    height: 60px;
    margin: 0 auto 20px;
    stroke: #fff;
    fill: none;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.cert-icon {
    width: 40px;
    height: 40px;
    margin: 0 auto 12px;
    stroke: #fff;
    fill: none;
    stroke-width: 1.5;
}
</style>