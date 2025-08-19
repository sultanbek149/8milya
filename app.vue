<template>
  <noscript>
      <div>
        <img src="https://mc.yandex.ru/watch/103800469" 
             style="position:absolute; left:-9999px;" 
             alt="" />
      </div>
  </noscript>
  <NuxtLoadingIndicator color="#4b34a7" />
  <a-config-provider :theme="th">
    <NuxtLayout>
      <NuxtPage />
    </NuxtLayout>
  </a-config-provider>
</template>

<script setup>
import { theme } from 'ant-design-vue';

const th = {
  algorithm: theme.darkAlgorithm,
};
</script>
