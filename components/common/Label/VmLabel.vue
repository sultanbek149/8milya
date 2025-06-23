<template>
  <div class="vm-label">
    <VmText
      size="14"
      weight="400"
      :text="text"
      block
      class="mb5"
      lineHeight="14"
      color="gray"
    />
    <slot />
  </div>
</template>
<script lang="ts">
import { VmText } from '@/components/common';

export default {
  name: 'VmLabel',
  components: {
    VmText,
  },
  props: {
    text: {
      type: String,
      default: '',
    },
  },
};
</script>

<style lang="scss">
.vm-label {
  display: flex;
  flex-direction: column;
}
</style>
