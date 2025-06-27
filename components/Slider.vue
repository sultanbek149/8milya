<template>
  <div class="reviews-section bg-gray-100 py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto mt-14">
    <h2 class="section-title text-3xl sm:text-4xl font-bold text-center mb-8 uppercase text-gray-800">ОТЗЫВЫ</h2>
    
    <div class="relative">
      <swiper
        :modules="modules"
        :slides-per-view="slidesPerView"
        :space-between="30"
        :loop="true"
        :navigation="{
          nextEl: '.swiper-button-next-custom',
          prevEl: '.swiper-button-prev-custom'
        }"
        :pagination="{ clickable: true }"
        :breakpoints="breakpoints"
        :autoplay="{
          delay: 5000,
          disableOnInteraction: false
        }"
        class="reviews-slider pb-12"
      >
        <swiper-slide v-for="(review, index) in reviewsData" :key="index" class="review-slide h-auto">
          <div class="review-content bg-white p-6 rounded-lg shadow-md h-full flex flex-col">
            <div class="flex items-center mb-4">
              <img 
                :src="review.image || defaultImage" 
                :alt="review.author" 
                class="w-16 h-16 rounded-full object-cover mr-4 border-2 border-gray-200"
              >
              <div>
                <p class="font-bold text-gray-800">{{ review.author }}</p>
                <p class="text-gray-600 text-sm">{{ review.car }}</p>
                <div class="flex items-center mt-1">
                  <div class="flex text-yellow-400">
                    <span v-for="star in 5" :key="star">
                      <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        class="h-5 w-5" 
                        viewBox="0 0 20 20" 
                        fill="currentColor"
                        :class="{'text-gray-300': star > review.rating}"
                      >
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    </span>
                  </div>
                  <span class="text-gray-600 text-sm ml-1">{{ review.rating.toFixed(1) }}</span>
                </div>
              </div>
            </div>
            <p class="review-text text-gray-700 mb-4 flex-grow">"{{ review.text }}"</p>
            <p class="text-gray-500 text-sm">{{ formatDate(review.date) }}</p>
          </div>
        </swiper-slide>

        <div class="slider-note text-center mt-20"></div>
      </swiper>

      <!-- Кастомные кнопки навигации с увеличенными отступами -->
      <div class="swiper-button-prev-custom cursor-pointer absolute left-0 top-1/2 -translate-y-1/2 z-10 -ml-8 lg:-ml-12">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </div>
      <div class="swiper-button-next-custom cursor-pointer absolute right-0 top-1/2 -translate-y-1/2 z-10 -mr-8 lg:-mr-12">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination, Autoplay } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import { ref, computed } from 'vue'

const props = defineProps({
  reviews: {
    type: Array,
    default: () => []
  },
  autoplayDelay: {
    type: Number,
    default: 5000
  }
})

const defaultImage = 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80'

const modules = [Navigation, Pagination, Autoplay]

const reviewsData = computed(() => {
  return props.reviews.length > 0 
    ? props.reviews 
    : [
        {
          text: "Отдавал на ремонт подвески — сделали на совесть. Мастера с руками!",
          author: "Алексей",
          car: "BMW X5",
          rating: 5,
          date: new Date('2023-05-15'),
          image: 'https://randomuser.me/api/portraits/men/32.jpg'
        },
        {
          text: "Покраска бампера как у дилера. Цена ниже в 2 раза. Рекомендую!",
          author: "Екатерина",
          car: "Mercedes C-class",
          rating: 4.5,
          date: new Date('2023-06-20'),
          image: 'https://randomuser.me/api/portraits/women/44.jpg'
        },
        {
          text: "Замена масла и диагностика за час. Ни одной ошибки после 10к км.",
          author: "Дмитрий",
          car: "Audi Q7",
          rating: 5,
          date: new Date('2023-07-10'),
          image: 'https://randomuser.me/api/portraits/men/75.jpg'
        },
        {
          text: "Выправили вмятину без следов. Теперь только сюда.",
          author: "Сергей",
          car: "Toyota Camry",
          rating: 4.5,
          date: new Date('2023-08-05'),
          image: 'https://randomuser.me/api/portraits/men/12.jpg'
        },
        {
          text: "Спасли коробку передач. Оригинальные запчасти + гарантия.",
          author: "Ольга",
          car: "Volkswagen Tiguan",
          rating: 5,
          date: new Date('2023-09-12'),
          image: 'https://randomuser.me/api/portraits/women/63.jpg'
        }
      ]
})

const breakpoints = {
  320: {
    slidesPerView: 1
  },
  768: {
    slidesPerView: 2
  },
  1024: {
    slidesPerView: 3
  }
}

const slidesPerView = ref(1)

const formatDate = (date) => {
  return new Date(date).toLocaleDateString('ru-RU', {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  })
}
</script>

<style>
.swiper-button-next-custom,
.swiper-button-prev-custom {
  @apply text-gray-800 bg-white bg-opacity-70 w-10 h-10 rounded-full flex items-center justify-center shadow-md;
}

.swiper-button-next-custom:hover,
.swiper-button-prev-custom:hover {
  @apply bg-opacity-100;
}

.swiper-button-next-custom:after,
.swiper-button-prev-custom:after {
  @apply text-xl font-bold;
}

.swiper-pagination-bullet-active {
  @apply bg-gray-800;
}

/* Увеличенные отступы для кнопок */
@media (min-width: 1024px) {
  .swiper-button-prev-custom {
    left: -3rem;
  }
  .swiper-button-next-custom {
    right: -3rem;
  }
}
</style>