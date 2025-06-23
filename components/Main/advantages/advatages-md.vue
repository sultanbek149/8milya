<template>
  <section class="advantages-cards container mx-auto px-[16px] my-[100px]">
    <CardAdv imagePath="/img/advantages/1.png">
      <p class="text-[16px] font-medium">Специалисты с опытом более 10 лет</p>
    </CardAdv>
    <CardAdv imagePath="https://static.8milya.kz/gif/1.gif">
      <VmText
        text="Собственный склад автозапчастей"
        size="16"
        weight="600"
        lineHeight="18"
        block
      />
    </CardAdv>
    <CardAdv imagePath="/img/advantages/3.png">
      <VmText
        text="Новейшее итальянское обрудование"
        size="16"
        weight="600"
        lineHeight="18"
        block
      />
    </CardAdv>
    <CardAdv imagePath="/img/advantages/4.png">
      <VmText
        text="Строгое соблюдение всех сроков"
        size="16"
        weight="600"
        lineHeight="18"
        block
      />
    </CardAdv>
  </section>
</template>

<script setup lang="ts">
import CardAdv from './advantage-card.vue';
import { VmText } from '@/components/common';

defineOptions({ name: 'AdvantagesCardMd' });
</script>

<style lang="scss">
.advantages-cards {
  display: grid;
  width: 100%;
  justify-content: space-around;
  box-sizing: border-box;
  gap: 20px;
  grid-template-columns: repeat(4, 1fr);
}

@media (max-width: 576px) {
  .advantages-cards {
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
  }
}
</style>
