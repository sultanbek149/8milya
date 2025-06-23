<template>
  <section class="main-block flex container mx-auto px-[16px]" id="main">
    <video
      class="absolute md:hidden z-[-1] video-bg"
      id="background-video"
      autoplay
      loop
      muted
      playsinline
      poster="https://static.8milya.kz/img/2preview.jpeg"
    >
      <source src="https://static.8milya.kz/video/2.mov" type="video/mp4" />
    </video>
    <a href="#main" class="block md:hidden">
      <img src="/img/logo/small.svg" alt="" class="main-block-sm__logo" />
    </a>
    <div class="main-block__text">
      <h1 class="text-[30px] text-left md:text-left md:text-[30px] font-medium font-[Jura]">
        8 МИЛЯ
      </h1>
      <h1 class="text-[16px] text-left md:text-left md:text-[30px] font-medium font-[Jura]">
        Клиент однажды — Клиент навсегда
      </h1>

      <h3 class="mt-[10px] text-left text-[14px] md:text-left text-[#ffffff9b]">
        Полная диагностика и обслуживание вашего автомобиля
      </h3>

      <ul class="mt-[55px]">
        <li>
          <p class="mt-[10px] text-[14px]">Ремонт ходовой части и двигателей</p>
        </li>
        <li>
          <p class="mt-[10px] text-[14px] text-slate-300">
            Профессиональные детейлинг услуги
          </p>
        </li>


        <li>
          <p class="mt-[10px] text-[14px] text-slate-300">
            Автоподбор и продажа автомобилей
          </p>
        </li>
      </ul>

      <div class="main-block__icons mt-[35px] flex gap-[10px] items-center">
        <a href="#instagram" class="nav-link">
          <img src="/icons/instagram.svg" />
        </a>
        <a href="#contacts" class="nav-link">
          <img src="/icons/ws.svg" />
        </a>

        <p class="text-[14px]">Алматы, ул. Диваева 33</p>
      </div>
    </div>

    <img src="/img/logo/big.svg" alt="" class="main-block__logo" />
  </section>
</template>

<script lang="ts" setup>
defineOptions({ name: 'MainBlockMd' });
</script>
<style lang="scss" scoped>
.video-bg {
  filter: brightness(0.5) grayscale(80%);
  left: 0;
  top: 0;
}

.main-block {
  display: flex;
  padding-top: 70px;
  padding-bottom: 45px;
  justify-content: space-between;
  align-items: center;

  &-sm__logo {
    height: 150px;
    position: absolute;
    right: 50%;
    left: 50%;
    top: 15px;
    transform: translateX(-50%);
    transition: all 0.2s;
    z-index: 999;
    // background: rgba(17, 17, 17, 0.87);
  }
}

@media (max-width: 576px) {
  .main-block {
    padding-top: 260px;

    &__logo {
      display: none;
    }
  }
}
</style>
