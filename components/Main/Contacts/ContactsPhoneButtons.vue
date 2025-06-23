<template>
  <div class="w-100 p10 mt20">
    <VmText
      :text="text"
      size="20"
      weight="400"
      block
      lineHeight="20"
      class="mb30"
      color="gray"
    />
    <VmText :text="phone" size="30" weight="400" block lineHeight="14" />

    <div class="flex gap-[20px] mt-[40px] w-100 justify-center">
      <a :href="'tel:' + phone">
        <VmButton text="Позвонить" outline class="w-100" size="40" />
      </a>

      <a :href="`https://api.whatsapp.com/send?phone=${ws}`">
        <VmButton text="Написать / Записаться" outline full class="w-100" size="40">
          <img src="/icons/ws.svg" alt="" />
        </VmButton>
      </a>
    </div>
  </div>
</template>

<script lang="ts">
import { VmLabel, VmText, VmButton } from '@/components/common';

export default {
  name: 'ContactsPhone',
  components: {
    VmLabel,
    VmText,
    VmButton
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
