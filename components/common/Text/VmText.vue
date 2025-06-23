<template>
  <p v-if="block" class="vm-text" :class="classes">
    {{ text }}
    <slot />
  </p>
  <span v-else class="vm-text" :class="classes">{{ text }}</span>
</template>

<script lang="ts">

export default defineComponent({
  name: 'vmText',
  props: {
    tag: {
      type: String,
      default: 'p',
    },
    text: {
      type: String,
      default: '',
    },
    size: {
      type: String,
      default: '16',
    },
    sizeSm: {
      type: String,
      default: '',
    },
    color: {
      type: String,
      default: 'white',
    },
    weight: {
      type: String,
      default: '600',
    },
    lineHeight: {
      type: String,
      default: '22',
    },
    block: {
      type: Boolean,
      default: false,
    },
    textDecoration: {
      type: String,
      default: 'none',
    },
  },
  setup(props) {
    const isMobile = ref(true);
    const classes = computed(() => {
      return [
        {
          [`vm-text--size-${props.sizeSm && isMobile.value ? props.sizeSm : props.size}`]:
            true,
        },
        'vm-text--color-' + props.color,
        'vm-text--weight-' + props.weight,
        'vm-text--line-height-' + props.lineHeight,
        'vm-text--text-decoration-' + props.textDecoration,
        { 'vm-text--block': props.block },
      ];
    });
    onMounted(() => {
      isMobile.value = window.innerWidth < 600;
    });
    return {
      classes,
    };
  },
});
</script>

<style scoped lang="scss">
.vm-text {
  font-weight: 600;
  color: #fff;
  font-size: 16px;
  line-height: 22px;
  margin: 0;

  &--color-gray {
    color: #c7c7c7;
  }

  &--color-inherit {
    color: inherit;
  }

  &--block {
    display: block;
  }

  &--text-decoration-underline {
    text-decoration: underline;
  }
}

$gapAmount: (12, 14, 16, 18, 20, 24, 26, 30);

@each $space in $gapAmount {
  .vm-text--size-#{$space} {
    font-size: #{$space}px;
  }
}

$weight: (100, 200, 300, 400, 500, 600, 700);

@each $space in $weight {
  .vm-text--weight-#{$space} {
    font-weight: #{$space};
  }
}

$height: (12, 14, 22, 28);

@each $space in $height {
  .vm-text--line-height-#{$space} {
    line-height: #{$space}px;
  }
}
</style>
