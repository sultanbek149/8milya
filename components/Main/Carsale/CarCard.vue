<template>
  <div class="car-card">
    <nuxt-link :to="'/cars/' + id">
      <div
        class="car-card__header"
        :style="{ 'background-image': `url('/content/img/cars/${image}')` }"
      ></div>
    </nuxt-link>

    <div class="car-card__text">
      <div class="car-card__text-main">
        <nuxt-link :to="'/cars/' + id">
          <VmText :text="text" block size="16" weight="500" lineHeight="16" sizeSm="14" />
        </nuxt-link>
      </div>
      <nuxt-link :to="'/cars/' + id">
        <VmText text="Подробнее >" block size="12" weight="100" class="mb10 mt20" />
      </nuxt-link>
    </div>
  </div>
</template>

<script lang="ts">
import { VmText } from '@/components/common';



export default defineComponent({
  name: 'CarCard',
  components: { VmText },
  props: {
    icon: { type: String, default: 'pulve' },
    image: { type: String, default: '1' },
    text: { type: String, default: 'pulve' },
    title: { type: String, default: 'pulve' },
    id: { type: String, default: 'pulve' },
  },
});
</script>

<style lang="scss">
.car-card {
  border-radius: 10px 10px 0px 0px;
  background: #121212;
  box-sizing: border-box;
  // max-width: 350px;
  border: 1px solid transparent;
  cursor: pointer;
  transition: all 3s;
  display: flex;
  flex-direction: column;

  &__header {
    background-size: cover;
    min-height: 240px;
  }

  &__text {
    padding: 20px;
    background: #000000;
    border-radius: 0px 0px 10px 10px;
    display: flex;
    flex-direction: column;
    height: 100%;

    &-main {
      flex: 1 1 0;
    }
  }

  &:hover {
    background-size: 120%;
    border: 1px solid rgb(240, 240, 240);
  }

  &__bg-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}

@media (max-width: 576px) {
  .car-card {
    &__header {
      background-size: cover;
      min-height: 120px;
    }
  }
}
</style>
