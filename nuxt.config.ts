import { fileURLToPath } from 'node:url';

export default defineNuxtConfig({
  devtools: { enabled: false },
  alias: {
    img: fileURLToPath(new URL('./assets/img', import.meta.url)),
    '@': fileURLToPath(new URL('./', import.meta.url)),
  },
  modules: [
    '@nuxtjs/tailwindcss',
    '@nuxtjs/google-fonts',
    '@vueuse/nuxt',
    '@zadigetvoltaire/nuxt-gtm',
    '@pinia/nuxt',
    '@ant-design-vue/nuxt',
    '@nuxtjs/sitemap',
    '@nuxtjs/robots',
    'nuxt-icon',
    'nuxt-gtag',
    // "@nuxt/icon"
    'nuxt3-meta-pixel',
  ],
  css: ['~/css/main.scss'],
  googleFonts: {
    families: {
      'Exo+2': true,
      Montserrat: [400, 500, 600, 700],
      Nunito: [400, 500, 700],
      Inter: [400, 500, 600, 700],
      Jura: [400, 500, 600, 700],
    },
  },
  facebook: {
    track: 'PageView',
    pixelId: '786163443531647',
    autoPageView: true,
    disabled: false,
  },
  gtm: {
    // id: 'GTM-KS3PLHXZ',
    id: 'GTM-KHBVXX9X'
  },
  app: {
    head: {
      link: [
        { rel: 'icon', href: '/favicon.ico' },
        {
          rel: 'alternate icon',
          type: 'image/png',
          href: '/favicon-32x32.png',
          sizes: '32x32',
        },
      ],
      script: [
        { src: '/js/yametrika.js', type: 'text/javascript' },
        // { src: '//code.jivo.ru/widget/ybwiGZmeLb', type: 'text/javascript', async: true },
      ],
    },
  },
});