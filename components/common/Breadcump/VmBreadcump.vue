<template>
  <div class="vm-breadcump">
    <VmText
      size="12"
      weight="400"
      :text="text"
      block
      lineHeight="14"
      color="gray"
    />
    <svg
      width="12"
      height="12"
      viewBox="0 0 12 12"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M3.57501 10.55C3.45001 10.425 3.38751 10.277 3.38751 10.106C3.38751 9.93533 3.45001 9.7875 3.57501 9.6625L7.23751 6L3.56251 2.325C3.44585 2.20833 3.38751 2.0625 3.38751 1.8875C3.38751 1.7125 3.45001 1.5625 3.57501 1.4375C3.70001 1.3125 3.84801 1.25 4.01901 1.25C4.18968 1.25 4.33751 1.3125 4.46251 1.4375L8.66251 5.65C8.71251 5.7 8.74801 5.75417 8.76901 5.8125C8.78968 5.87083 8.80001 5.93333 8.80001 6C8.80001 6.06667 8.78968 6.12917 8.76901 6.1875C8.74801 6.24583 8.71251 6.3 8.66251 6.35L4.45001 10.5625C4.33335 10.6792 4.18968 10.7375 4.01901 10.7375C3.84801 10.7375 3.70001 10.675 3.57501 10.55Z"
        fill="white"
      />
    </svg>
  </div>
</template>
<script lang="ts">
import { VmText } from '@/components/common';

export default {
  name: 'VmBreadcrumb',
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
.vm-breadcump {
  display: flex;
  gap: 5px;
  align-items: center;
  white-space: nowrap;
}
</style>
