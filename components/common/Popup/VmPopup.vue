<template>
  <section>
    <div class="modal-popup">
      <div class="modal-popup__content" :style="popupContentStyle">
        <div class="modal-popup__content-header">
          <div
            @click="close"
            class="modal-popup__close-icon modal-popup__close-icon-mobile"
          >
            <img src="/icons/arrow-icon.svg" />
          </div>
          <div
            @click="close"
            class="modal-popup__close-icon modal-popup__close-icon-desktop"
          >
            <img src="/icons/close-icon.svg" />
          </div>
        </div>

        <div class="modal-popup__content-body">
          <slot :close="close" />
        </div>
      </div>
    </div>
    <div class="modal-popup-shadow" @click="close"></div>
  </section>
</template>

<script lang="ts">
import {
  defineComponent,
  onMounted,
  onBeforeUnmount,
  computed,
} from 'vue';

export default defineComponent({
  props: {
    maxWidth: {
      type: Number,
      default: 450,
    },
  },
  setup(props, { emit }) {


    const popupContentStyle = computed(() => {
      return {
        'max-width': props.maxWidth + 'px',
      };
    });

    const close = () => {
      emit('close');
    };

    onMounted(() => {
      document.body.style.overflow = 'hidden';
    });

    onBeforeUnmount(() => {
      document.body.style.overflow = '';
    });

    return { close, popupContentStyle };
  },
});
</script>

<style lang="scss" scoped>
.modal-popup {
  position: fixed;
  z-index: 101;
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */

  &-shadow {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 100;
    top: 0;
    left: 0;
    background-color: rgb(0, 0, 0); /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
  }

  &__content {
    background: rgb(17 17 17 / 57%);
    backdrop-filter: blur(9px);
    border-radius: 0px 0px 20px 20px;
    margin: 0 auto; /* 15% from the top and centered */
    padding: 20px;
    max-width: 750px;
    &-header {
      display: flex;
      justify-content: space-between;
    }

    &-body {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
  }
  &__close-icon {
    cursor: pointer;
    width: 40px;

    &-desktop {
      display: none;
    }
  }
}

@media (min-width: 490px) {
  .modal-popup__content {
    border-radius: 20px;
    margin: 15% auto;
  }

  .modal-popup__close-icon-mobile {
    display: none;
  }
  .modal-popup__close-icon-desktop {
    display: block;
  }
  .modal-popup__content-header {
    justify-content: flex-end;
  }
}
</style>
