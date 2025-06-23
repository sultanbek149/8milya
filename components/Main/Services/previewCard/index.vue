<template>
  <nuxt-link :to="link"
    class="preview-card"
    :style="{ 'background-image': `url('/img/services/${image}.png')` }"
    >
    <div class="preview-card__header">
      <img :src="`/icons/services/${icon}.svg`" alt="" />
      <p class="text-[14px] md:text-[20px] mt-[10px] mb-[20px]">{{ title }}</p>
      <div class="preview-card__desc">
        <VmText :text="text" block size="14" weight="300" lineHeight="14" />
      </div>
    </div>
  </nuxt-link>
  <!-- <VmText text="Подробнее >" block size="12" weight="100" class="mb10 mt20" /> -->
</template>

<script lang="ts">
import { VmText } from '@/components/common';

import { defineComponent } from 'vue';

export default defineComponent({
  name: 'ServicePreviewCard',
  components: { VmText },
  props: {
    icon: { type: String, default: 'pulve' },
    image: { type: String, default: '1' },
    text: { type: String, default: 'pulve' },
    title: { type: String, default: 'pulve' },
    link: { type: String, default: '' },
  },
});
</script>

<style lang="scss">
.preview-card {
  border-radius: 5px;
  background: #121212;
  padding: 26px 36px;
  box-sizing: border-box;
  // max-width: 350px;
  background-size: cover;
  border: 1px solid transparent;
  cursor: pointer;
  transition: all 3s;
  display: flex;
  flex-direction: column;

  &__header {
    flex: 1 1 0;
  }

  &:hover {
    border: 1px solid rgb(240, 240, 240);
  }

  &__bg-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}

@media (max-width: 576px) {
  .preview-card {
    padding: 16px 16px;

    &__desc {
      display: none;
    }
  }
}
</style>
