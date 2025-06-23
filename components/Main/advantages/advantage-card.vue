<template>
  <div class="advantage-card" :style="style">
    <div class="advantage-card-text">
      <slot />
    </div>
  </div>
</template>

<script setup lang="ts">
defineOptions({ name: 'AdvantageCard' });

const props = defineProps({
  imagePath: {
    type: String,
    default: '1',
  },
});

const style = computed(() => ({
  'background-image': `url('${props.imagePath}')`,
}));
</script>

<style lang="scss">
.advantage-card {
  min-height: 300px;
  width: 100%;
  max-width: 260px;
  border-radius: 5px;
  background: #121212;
  padding: 26px 36px;
  box-sizing: border-box;
  // background-image: url('/img/advantages/1.png');
  background-repeat: no-repeat;
  background-size: cover;
  transition: all 3s;
  position: relative;

  &:hover {
    background-size: 120%;
  }

  &-text {
    position: absolute;
    padding: 20px;
    box-sizing: border-box;
    bottom: 0;
    left: 0;
  }
}

@media (max-width: 576px) {
  .advantage-card {
    min-height: 200px;
  }
}
</style>
