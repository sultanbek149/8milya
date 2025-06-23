<template>
  <div class="vm-contacts-phone">
    <VmText size="14" weight="400" :text="text" block class="mb5" color="gray" />

    <div class="vm-contacts-phone__phone">
      <a :href="'tel:' + phone">
        <VmText :text="phone" color="blue" textDecoration="underline" size="18" />
      </a>

      <a :href="ws">
        <img src="/icons/ws.svg" alt="" />
      </a>
    </div>
    <a :href="ws">
      <VmText text="Перейти в чат с менедждером >" block size="12" weight="300" />
    </a>
  </div>
</template>

<script lang="ts">
import { VmLabel, VmText } from '@/components/common';

export default {
  name: 'ContactsPhone',
  components: {
    VmLabel,
    VmText,
  },
  props: {
    text: {
      type: String,
      default: '',
    },
    phone: {
      type: String,
      default: '',
    },
    ws: {
      type: String,
      default: '',
    },
  },
};
</script>
<style lang="scss">
.vm-contacts-phone {
  &__phone {
    display: flex;
    gap: 10px;
    align-items: center;
  }
}
</style>
