<template>
  <div id="instagram" class="out-instagram container mx-auto my-[100px] px-[16px]">
    <div class="flex justify-center">
      <VmText text="Наш инстаграм" size="24" weight="700" block class="mb50" />
    </div>

    <div class="flex gap-[10px] our-instagram__cards">
      <InstagramCard
        image="inst1"
        text="Автосервис, Детейлинг"
        inst="8milya.autoimperiya"
      />

      <InstagramCard image="inst2" text="Прокат автомобилей" inst="8milya_rentalcars" />
    </div>
  </div>
</template>
<script lang="ts">
import VmText from '../../common/Text/VmText.vue';
import InstagramCard from './InstagramCard.vue';

export default {
  name: 'OurInstagram',
  components: { VmText, InstagramCard },
};
</script>
<style lang="scss">
.our-instagram__link {
  width: 100%;
}

.our-instagram__card {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('/img/instagram1.png');
  background-size: cover;
  background-repeat: no-repeat;
  height: 300px;
  transition: all 3s;

  &:hover {
    background-size: 120%;
    border: 1px solid rgb(240, 240, 240);
  }

  &-icon {
    height: 40px;
  }
}

@media (max-width: 576px) {
  .our-instagram__card {
    height: 200px;
  }
  .our-instagram__cards {
    flex-wrap: wrap;
    gap: 10px;
  }
}
</style>
