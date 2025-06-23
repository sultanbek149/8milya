<template>
  <footer class="my-20">
    <p class="text-center text-sm text-slate-500">
      Copyright © {{ new Date().getFullYear() }}. 8 Миля. Все права защищены.
    </p>

    <p class="text-center text-xs text-slate-500 mt-1">Алматы, улица Диваева 33</p>
  </footer>
  <span itemscope itemtype="r" class="”DisplaNone”">
    <meta itemprop="copyrightYear" :content="String(new Date().getFullYear())" />
    <meta itemprop="copyrightHolder" content="8 Миля Автоимперия" />
  </span>
</template>
