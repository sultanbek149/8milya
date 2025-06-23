<template>
  <div class="our-mis mb-[100px] px-[16px]">
    <p class="text-[14px] md:text-[16px] font-normal font-[Montserrat] max-w-[600px]">
      Миссия нашей компании - это премиальное качество обслуживания Вашего автомобиля, что
      позволяет нам быть одним из лучших автомобильных сервисов в Алматы.
    </p>
  
  </div>
</template>
<script lang="ts">
import { VmText } from '@/components/common';

export default {
  name: 'our-mis',
  components: { VmText },
};
</script>
<style lang="scss">
.our-mis {
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url('/img/bg-mis.png');
  height: 300px;
}
</style>
