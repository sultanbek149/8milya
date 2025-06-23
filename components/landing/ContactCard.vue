<template>
  <div id="contacts" class="grid md:grid-cols-2 gap-10 mx-auto max-w-4xl mt-28">
    <div>
      <p class="font-medium text-2xl text-gray-400">Наши контакты</p>
      <p class="text-lg leading-relaxed text-slate-500 mt-3">
        Есть вопросы или предложения?
      </p>
      <div class="mt-5">
        <a :href="info.instLink" class="flex items-center mt-2 space-x-2 text-gray-300">
          <Icon class="text-gray-400 w-4 h-4" name="uil:instagram" />
          <span>{{ info.instName }} </span>
        </a>
        <a :href="info.telLink" class="flex items-center mt-2 space-x-2 text-gray-300">
          <Icon class="text-gray-400 w-4 h-4" name="uil:phone" />
          <span>{{ info.phone }} </span>
        </a>
        <a :href="info.wsLink" class="flex items-center mt-2 space-x-2 text-gray-300">
          <Icon class="text-gray-400 w-4 h-4" name="uil:whatsapp" />
          <span>Написать WhatsApp </span>
        </a>
        <div class="flex items-center mt-2 space-x-2 text-gray-300">
          <Icon class="text-gray-400 w-4 h-4" name="uil:clock" />
          <span>Пн. – Сб.: с 10:00 до 19:00</span>
        </div>
        <a :href="info.adresLink" class="flex items-center mt-2 space-x-2 text-gray-300">
          <Icon class="text-gray-400 w-4 h-4" name="uil:map-marker" />
          <span>{{ info.adresText }} </span>
        </a>
        <div class="flex items-center mt-2 space-x-2 text-gray-300">
          <Icon class="text-gray-400 w-4 h-4" name="uil:envelope" />
          <a :href="info.emailLinK">
            {{ info.emailText }}
          </a>
        </div>
      </div>
    </div>
    <div>
      <iframe
        src="https://yandex.kz/map-widget/v1/?z=12&ol=biz&oid=33745911107"
        width="100%"
        height="450"
        frameborder="0"
      ></iframe>
    </div>
  </div>
</template>

<script setup lang="ts">
import { useInfo } from '@/composable/phone';
const info = useInfo();
</script>
