<template>
  <button
    :type="type"
    class="vm-button"
    :class="classes"
    :disabled="disabled"
    @click="click"
  >
    {{ text }}
    <slot />
    <!-- <vmLoader v-if="isLoading" :size="12" /> -->
  </button>
</template>

<script lang="ts">
import { computed, defineComponent } from 'vue';
//import vmLoader from '../Loader/vmLoader.vue';

export default defineComponent({
  name: 'vmButton',
  components: {},
  props: {
    color: {
      type: String,
      default: 'gray',
    },
    type: {
      type: String,
      default: 'button',
    },
    text: {
      type: String,
      default: '',
    },
    size: {
      type: String,
      default: '30',
    },
    full: {
      type: Boolean,
      default: false,
    },
    outline: {
      type: Boolean,
      default: false,
    },
    rounded: {
      type: Boolean,
      default: false,
    },
    disabled: {
      type: Boolean,
      default: false,
    },
    isLoading: {
      type: Boolean,
      default: false,
    },
  },
  setup(props, { emit }) {
    const classes = computed(() => [
      { 'vm-button-outline': props.outline },
      `vm-button__color-${props.color}`,
      `vm-button__size-${props.size}`,
      { 'vm-button-full': props.full },
      { 'vm-button-rounded': props.rounded },
      { 'vm-button-disabled': props.disabled },
    ]);

    const click = () => {
      if (props.disabled) {
        return;
      }
      if (props.isLoading) {
        return;
      }

      emit('click');
    };
    return {
      classes,
      click,
    };
  },
});
</script>

<style scoped lang="scss">
.vm-button {
  border: unset;
  color: white;
  cursor: pointer;
  outline: 0;
  border-radius: 4px;
  font-weight: 500;
  font-size: 14px;
  line-height: 17px;
  box-sizing: border-box;
  padding: 6px 12px;
  gap: 10px;
  display: flex;
  align-items: center;
  justify-content: center;

  &-full {
    width: 100%;
  }

  &__color {
    &-gray {
      background: transparent;
      &:hover {
        background: #464648;
      }
    }
  }

  &__size {
    &-30 {
      height: 30px;
    }

    &-40 {
      height: 40px;
    }

    &-26 {
      height: 26px;
      font-size: 14px;
    }

    &-60 {
      height: 60px;
      font-size: 22px;
      padding: 0 35px;
    }
  }

  &-outline {
    &.vm-button {
      &__color {
        &-gray {
          background: transparent;
          border: 1px solid #464648;
          color: #fff;
          box-shadow: 0 4px 20px rgba(17, 242, 204, 0.152);
          &:hover {
            border: 1px solid rgb(197, 197, 197);
            color: #e0e0e0;
          }
        }
      }
    }
  }

  &-rounded {
    border-radius: 16px;
  }

  &-disabled {
    opacity: 0.5;
  }
}
</style>
