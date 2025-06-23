<template>
  <div class="vm-breadcumps">
    <nuxt-link v-for="(link, i) in breadrubs" :key="i" :to="link.to">
      <VmBreadcump :text="link.text" />
    </nuxt-link>
  </div>
</template>
<script lang="ts">
import VmBreadcump from './VmBreadcump.vue';

export default {
  name: 'VmBreadcrumbs',
  components: {
    VmBreadcump,
  },
  props: {
    links: {
      type: Array,
      default: [],
    },
  },
  setup(props) {
    const breadrubs = computed(() => {
      const l = [...props.links];
      return l.reverse();
    });

    return {
      breadrubs,
    };
  },
};
</script>

<style lang="scss">
.vm-breadcumps {
  display: flex;
  gap: 15px;
  direction: rtl;
  display: flex;
  overflow-x: auto;
  overflow-y: hidden;
  overscroll-behavior-x: contain;
  justify-content: flex-end;
  white-space: nowrap;

  &::-webkit-scrollbar {
    display: none;
  }
}
</style>
