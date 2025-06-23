<template>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8 mb-16">
        <!-- Преимущество 1 -->
        <div class="feature-card p-6 xl:p-8 rounded-lg text-center">
            <svg class="icon-pros" viewBox="0 0 24 24">
                <path d="M3 21h18v-2H3v2zM21 8H3v10h18V8zM3 3v2h18V3H3z" />
                <path d="M9 13h2v3H9zM13 13h2v3h-2z" />
                <path d="M12 6l-3 3h2v3h2V9h2z" />
            </svg>
            <h5 class="text-xl xl:text-2xl font-bold mb-2">Собственный цех</h5>
            <p class="text-gray-300">Профессиональные покрасочные камеры с климат-контролем и зоной подготовки
            </p>
        </div>

        <!-- Преимущество 2 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
            <svg class="icon-pros" viewBox="0 0 24 24">
                <path d="M12 2L4 7v10l8 5 8-5V7L12 2z" />
                <path d="M12 12l8-5M12 12v10M12 12L4 7" />
                <path d="M16 5.25l-4 2.5-4-2.5" />
                <path d="M8 7v10l4 2.5M16 7v10l-4 2.5" />
            </svg>
            <h5 class="text-xl xl:text-2xl font-bold mb-2">Сертифицированные материалы</h5>
            <p class="text-gray-300">Оригинальные краски PPG, BASF и 3M с документальным подтверждением</p>
        </div>

        <!-- Преимущество 3 -->
        <div class="feature-card p-6 lg:p-8 rounded-lg text-center">
            <svg class="icon-pros" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                <path d="M12 8v4M12 16h.01" />
            </svg>
            <h5 class="text-xl xl:text-2xl font-bold mb-2">Гарантия 3 года</h5>
            <p class="text-gray-300">Официальная гарантия на все работы с фиксацией в цифровом реестре</p>
        </div>
    </div>
</template>