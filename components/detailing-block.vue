<template>
  <div
    class="container flex flex-col md:flex-row gap-[40px] justify-around mx-auto px-[16px] py-[40px]"
  >
    <div>
      <p class="font-[Jura] mb-[20px] text-[20px] font-medium">{{ title }}</p>
      <ul
        class="text-[#ffffff7f] font-[Jura] list-decimal px-[16px] flex flex-col gap-[10px] max-w-[600px]"
      >
        <slot />
      </ul>
      <p class="mt-[20px]">{{ price }}</p>
    </div>
    <slot name="after" />
  </div>
</template>

<script setup lang="ts">
defineOptions({
  name: 'DetailingBlock',
});

defineProps({
  title: String,
  price: String,
});
</script>

<style scoped></style>
