<template>
  <div class="relative oil">
    <LandingNavbar />
    <video
      class="absolute md:hidden z-[-1] video-bg top-[-270px] left-0"
      id="background-video"
      autoplay
      loop
      muted
      playsinline
      poster="https://static.8milya.kz/img/2preview.jpeg"
    >
      <source
        src="https://static.8milya.kz/video/2.mov"
        type="video/mp4"
      />
    </video>
    <LandingContainer>
      <div class="container mx-auto my-[90px] pb-[20px]">
        <h1
          class="text-[26px] lg:text-[36px] font-bold lg:tracking-tight text-slate-100 lg:leading-[42px]"
        >
          Замена масла в двигателе за 20 минут
        </h1>
        <p class="text-[16px] md:text-lg mt-4 text-slate-400 max-w-xl font-[Nunito]">
          Запишитесь сегодня на бесплатную замену масла (при покупке масла на сервисе)
        </p>
        <div class="flex flex-col sm:flex-row gap-3 mt-[20px]">
          <img
            src="/yandex.svg"
            width="280px"
            alt="yandex"
          />
          <img
            src="/google.svg"
            width="280px"
            alt="google"
          />
        </div>
      </div>
    </LandingContainer>
  </div>

  <LandingContainer>
    <!---->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <MiniFeature
        name="Приятные цены и сертификаты качества на все масла и фильтра (работаем с официальными поставщиками)"
      />
      <MiniFeature
        name="Более 10 марок масла под автомобили любых марок и моделей, в тч. спортивных "
      />
      <MiniFeature name="Комфортная зона ожидания с кофе и WiFi" />
      <MiniFeature name="Аккуратность исполнения с гарантией" />
      <MiniFeature name="Удобная локация Алматы, ул. Диваева 33" />
      <MiniFeature name="Замена за 20 минут, четко по записи" />
    </div>
    <!---->
    <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
      <div class="grid md:grid-cols-2 items-center justify-between">
        <div class="font-[Nunito] flex flex-col gap-[20px]">
          <p>
            8 Миля Автоимперия предлагает комплексные услуги по замене масла для
            автомобилей всех марок и моделей.
          </p>
          <p class="text-slate-400">
            Наши опытные специалисты гарантируют качественное обслуживание, использующее
            только сертифицированные и высококачественные масла и фильтры.
          </p>
        </div>
        <div class="flex items-center justify-center my-3">
          <img
            src="https://static.8milya.kz/photos/oil/oil4.jpeg"
            alt=""
            class="h-[400px] w-[500px] object-cover rounded-lg"
          />
        </div>
      </div>
    </div>
    <!---->

    <!---->
    <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
      <div class="grid md:grid-cols-2 items-center justify-between">
        <div>
          <p class="text-2xl font-bold mb-5">Почему замена масла важна?</p>
          <p class="text-[14x] text-slate-400">
            Регулярная замена масла в двигателе автомобиля является необходимой процедурой
            для поддержания его нормальной работы. Масло обеспечивает смазку движущихся
            частей двигателя, предотвращая их износ и перегрев. Со временем масло
            загрязняется продуктами сгорания топлива и металлической стружкой, что снижает
            его эффективность. Несвоевременная замена масла может привести к серьезным
            поломкам и дорогостоящему ремонту двигателя.
          </p>
        </div>
        <div class="flex items-center justify-center my-2">
          <img
            src="https://static.8milya.kz/photos/oil/oil2.jpg"
            alt=""
            class="h-[400px] w-[500px] object-cover rounded-lg"
          />
        </div>
      </div>
    </div>

    <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
      <div class="grid md:grid-cols-2 items-center justify-between">
        <div>
          <p class="text-2xl font-bold mb-5">
            Более 100 положительных отзывов от довольных клиентов
          </p>
        </div>
        <div class="flex items-center justify-center my-2">
          <img
            src="https://static.8milya.kz/photos/oil/oil5.jpg"
            alt=""
            class="h-[400px] w-[500px] object-cover rounded-lg"
          />
        </div>
      </div>
    </div>

    <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
      <div class="grid md:grid-cols-2 items-center justify-between">
        <div>
          <p class="text-2xl font-bold mb-5">Как часто следует менять масло?</p>
          <p class="text-[14x] text-slate-400">
            Частота замены масла зависит от типа используемого масла и условий
            эксплуатации автомобиля. В среднем, рекомендуется менять масло каждые 5,000 -
            10,000 километров пробега. Однако, для точного определения интервала замены
            масла, следует обратиться к руководству пользователя вашего автомобиля или
            проконсультироваться с нашими специалистами.
          </p>
        </div>
      </div>
    </div>

    <div class="mt-[100px] container mx-auto rounded-lg fade-in">
      <p class="text-2xl font-bold mb-5">Также предоставляем комплексное обслуживание всего автомобиля</p>
      <FeaturesCard />
    </div>

    <div class="mt-[100px] container mx-auto rounded-lg fade-in text-slate-100">
      <div class="grid md:grid-cols-2 items-center justify-between">
        <div>
          <p class="text-2xl font-bold mb-5">Как записаться на замену масла?</p>
          <p class="text-[14x] text-slate-400">
            Вы можете записаться на замену масла по телефону
            <a
              :href="info.telLink"
              class="font-semibold text-blue-300"
            >
              {{ info.phone }} </a
            >,
            <a
              :href="info.wsLink"
              class="font-semibold text-blue-300"
            >
              в WhatsApp </a
            >, в
            <a
              :href="info.instLink"
              class="font-semibold text-blue-300"
            >
              Instagram
            </a>
            {{ info.instName }} или заполнив форму на нашем сайте. Мы работаем пн-сб,
            чтобы вы могли выбрать наиболее удобное для вас время посещения.
          </p>
        </div>
        <div class="flex items-center justify-center my-2">
          <img
            src="https://static.8milya.kz/photos/oil/oil3.jpg"
            alt=""
            class="h-[400px] w-[500px] object-cover rounded-lg"
          />
        </div>
      </div>
    </div>
  </LandingContainer>

  <LandingContainer>
    <LandingLogos />
    <div class="py-20">
      <LandingContactCard />
    </div>
  </LandingContainer>
  <LandingFooter />
</template>

<script setup lang="tsx">
import { useInfo } from '~/composable/phone';
import FeaturesCard from '~/components/landing/FeaturesCard.vue';

useSeoMeta({
  title: `Профессиональная замена масла в Алматы - 8 Миля`,
  description: `Комплексные услуги по замене масла для автомобилей всех марок и моделей`,
});

const info = useInfo();

const MiniFeature = defineComponent({
  props: { name: { type: String, required: true } },
  setup(props) {
    return () => (
      <div class="bg-gradient-to-r from-zinc-900 to-zinc-900 rounded-lg p-4 border border-slate-800 font-[Nunito]">
        <div class="flex items-center gap-[10px]">
          <Icon
            name="icon-park-outline:check-one"
            class="text-gray-600 shrink-0"
          />
          <p class="text-[14px]">{props.name}</p>
        </div>
      </div>
    );
  },
});

const BigFeature = defineComponent({
  props: {
    name: { type: String, required: true },
    desc: { type: String, required: true },
  },
  setup(props) {
    return () => (
      <div class="bg-gradient-to-r from-zinc-900 via-gray-900 to-zinc-900 rounded-lg p-4 border border-slate-800 font-[Nunito]">
        <div class="flex flex-col gap-[10px]">
          <Icon
            name="icon-park-outline:check-one"
            class="text-gray-600 text-[34px]"
          />
          <p class="text-[16px] font-semibold">{props.name}</p>
          <p class="text-[14x] text-slate-400">{props.desc}</p>
        </div>
      </div>
    );
  },
});
</script>

<style scoped>
.video-bg {
  filter: brightness(0.5) grayscale(80%);
}

.oil:before {
  background-image: url(/bg.webp);
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  content: ' ';
  display: block;
  height: 100%;
  left: 0;
  opacity: 0.4;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}
</style>
