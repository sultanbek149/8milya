<template>
  <div class="about-us container mx-auto my-[100px] px-[16px]">
    <img src="/img/about.png" alt="" class="about-us__img img-fluid" />
    <div class="about-us__cont max-w-[500px]">

    <h3 class="text-[24px] mb-[30px]">
    
      О нас
    </h3>
     
      <p class="text-[#ffffffd1] font-[Jura] mb-[20px]">
        8-я Миля – крупнейший мультибрендовый автосервис в Алматы.
      </p>

      <p class="text-[#ffffffd1] font-[Jura] mb-[20px]">
        Мастера компании – профессионалы с опытом от 10 лет.
      </p>

      <p class="text-[#ffffffd1] font-[Jura] mb-[20px]">
        Мастерская автосервиса укомплектована необходимым оборудованием и
        специнструментами, что гарантирует оперативное выполнение и качество.
      </p>
    </div>
  </div>
</template>
<script lang="ts">
import VmText from '../common/Text/VmText.vue';

export default {
  name: 'AboutUs',
  components: { VmText },
};
</script>
<style lang="scss">
.about-us {
  display: flex;
  gap: 80px;
  align-items: center;
  flex-wrap: wrap;
}
</style>
