<template>
  <a :href="`https://www.instagram.com/${inst}`" class="our-instagram__link" target="_blank">
    <div
      class="our-instagram__card"
      :style="{ 'background-image': `url('/img/${image}.png')` }"
    >
      <img src="/icons/instagram.svg" alt="" class="our-instagram__card-icon" />
      <div class="mt20 flex flex-col justify-center items-center">
        <VmText :text="text" size="16" weight="400" block />
        <div class="flex items-center gap-[10px]">
          <img src="/icons/instagram.svg" alt="" class="about-us__img" />
          <VmText :text="inst" size="14" weight="400" block />
        </div>

        <VmText text="Перейти  >" size="12" weight="100" block class="mt-[20px]" />
      </div>
    </div>
  </a>
</template>
<script lang="ts">
import VmText from '../../common/Text/VmText.vue';

export default {
  name: 'InstagramCard',
  components: { VmText },
  props: {
    image: {
      type: String,
      default: 'instagram1',
    },
    text: {
      type: String,
      default: 'Продажа автомобилей',
    },
    inst: {
      type: String,
      default: '8milya.carsale',
    },
  },
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
  background-position-y: 50%;
  height: 300px;
  transition: all 3s;

  &:hover {
    border: 1px solid rgb(240, 240, 240);
  }

  &-icon {
    height: 40px;
  }
}
</style>
