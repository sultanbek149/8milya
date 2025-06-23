<template>
  <div class="relative pb-[100px]">
    <LandingNavbarDetailing />

    <LandingContainer>
      <div class="container mx-auto detailng">
        <h1
          class="text-[20px] lg:text-[36px] font-bold lg:tracking-tight text-slate-100 lg:leading-[42px]"
        >
          Удаление вмятин без покраски
        </h1>
        <p class="text-[16px] md:text-lg mt-4 text-slate-400 max-w-xl font-[Nunito]">
          Сохраним оригинальность детали и заводское ЛКП
        </p>
      </div>
    </LandingContainer>
  </div>

  <div class="container mx-auto p-8 rounded-lg fade-in text-slate-100">
    <div class="grid md:grid-cols-2 items-center justify-between">
      <div>
        <p class="text-2xl font-bold mb-5">Почему лучше не красить если это возможно?</p>
        <ul class="list-disc pl-5 space-y-2">
          <li>Есть риск просвечий шаклевки через время</li>
          <li>
            Деталь может начать ржаветь уже через пол года (при неправильной покраске)
          </li>
          <li>Покраска с гарантией на официалье стоит на 30% дороже</li>
          <li>Вам могут не попасть в цвет</li>
          <li>
            Часто необходимо красить несколько деталей чтобы сделать плавный переход
          </li>
          <li>
            Вам необходимо оставить автомобиль
            <span class="font-bold">минимум на неделю</span>
          </li>
          <li>Крашенный автомобиль стоит дешевле</li>
        </ul>
      </div>
      <div class="flex items-center justify-center">
        <img src="https://static.8milya.kz/detailing/3s.webp" alt="" class="h-[400px] w-[500px] object-cover rounded-lg"/>
      </div>

    </div>

    <div class="grid md:grid-cols-2 gap-4 p-4 rounded-lg fade-in my-[100px]">
      <div>
        <div class="flex items-center mb-[20px] gap-[10px]">
          <Icon name="simple-line-icons:check" class="text-[16px]" />
          <p class="text-gray-300 text-[19px] ease-in-out duration-300 bounce-in">
            Вам подходит и выгодно, если у вас:
          </p>
        </div>

        <ul class="list-disc pl-5 space-y-2 text-slate-400">
          <li><i class="fas fa-parking"></i> Парковочная и средние вмятины</li>
          <li><i class="fas fa-car"></i> Свежая или не ржавеющая машина</li>
          <li>
            <i class="fas fa-shield-alt"></i> Тогда вам выгодно сохранить первозданный вид
          </li>
          <li><i class="fas fa-hand-holding-usd"></i> Готовите авто на продажу</li>
          <li><i class="fas fa-check-circle"></i> Не поврежден ЛКП</li>
        </ul>
      </div>
      <div>
        <div class="flex items-center mb-[20px] gap-[10px]">
          <Icon name="flat-color-icons:cancel" />
          <p class="text-gray-300 text-[19px] ease-in-out duration-300 bounce-in">
            Вам не подходит, если у вас:
          </p>
        </div>

        <ul class="list-disc pl-5 space-y-2 text-slate-400">
          <li><i class="fas fa-sun"></i> Выгоревший лак на автомобиле</li>
          <li><i class="fas fa-car-crash"></i> Есть царапины на месте удара</li>
          <li>
            <i class="fas fa-car-side"></i> Старый автомобиль и нет смысла сохранять его
            оригинальность
          </li>
          <li>
            <i class="fas fa-paint-brush"></i> ЛКП с сильными повреждениями или содрана
            краска
          </li>
          <li><i class="fas fa-expand-arrows-alt"></i> Растянутый металл</li>
        </ul>
      </div>
    </div>

    <h2 class="text-xl font-semibold mt-8 text-white">
      Что значит качественный ремонт вмятин без покраски в нашем сервисе?
    </h2>
    <ul class="list-disc pl-5 space-y-2 mt-4">
      <li>Вмятина удаляется с помощью набора специальных инструментов</li>
      <li>Отсутствует повреждения на металле (особенно важно для алюминия)</li>
      <li>Отсутствует трещины на краске</li>
      <li>Сохранена заводская шагрень на краске</li>
      <li>Не повреждена краска (ремонт вмятины в месте с вами)</li>
    </ul>
  </div>
  <LandingContainer>
    <LandingLogos />
    <div class="py-20">
      <LandingContactCard />
    </div>
  </LandingContainer>
  <LandingFooter />
</template>

<script setup lang="ts">
// definePageMeta({
//   layout: 'landing',
// });

useSeoMeta({
  title: `Услуги - Удаление вмятин без покраски  Детейлинг 8 Миля`,
  description: `Сохраним оригинальность детали и заводское ЛКП с установкой вмятин без покраски`,
});
</script>

<style scoped>
.detailng:before {
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
