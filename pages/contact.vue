<script setup>
import { useInfo } from '@/composable/phone';

definePageMeta({
  layout: 'landing',
});

const info = useInfo();

useSeoMeta({
  title: 'Контакты - Детейлинг 8 Миля в Алматы',
  description: `Наши контакты: ${info.adresText}, ${info.phone}. Все виды детейлинга и уход вашего автомобиля в Автоимперия 8 Миля в Алматы`,
  ogTitle: 'Контакты - Детейлинг 8 Миля в Алматы',
  ogDescription: `Наши контакты: ${info.adresText}, ${info.phone}. Все виды детейлинга и уход вашего автомобиля в Автоимперия 8 Миля в Алматы`,
  ogType: 'website',
  ogImage: 'https://detailing.8milya.kz/og-detailing.webp',
  ogType: 'website',
  ogUrl: 'https://detailing.8milya.kz/',
});
</script>

<template>
  <LandingContainer>
    <LandingSectionhead>
      <template v-slot:title>Контакты</template>
      <template v-slot:desc>Мы рады вам помочь</template>
    </LandingSectionhead>

    <LandingContactCard />
  </LandingContainer>

  <div itemscope="" itemtype="http://schema.org/Organization" class="”DisplaNone”">
    <meta itemprop="name" content="Автоимперия 8 Миля" />
    <meta itemprop="telephone" :content="info.phone" />
    <meta itemprop="email" :content="info.emailText" />
    <meta itemprop="address" :content="info.adresText" />
    <meta itemprop="logo" content="https://detailing.8milya.kz/logo.jpeg" />
    <meta itemprop="image" content="https://detailing.8milya.kz/bg-md.jpeg" />
    <meta
      itemprop="description"
      content="Контакты. Все виды детейлинга и уход вашего автомобиля в Автоимперия 8 Миля в Алматы"
    />
    <meta
      itemprop="legalName"
      content="Автоимперия 8 Миля - Все виды детейлинга в Алматы"
    />
    <link
      itemprop="url"
      href="https://detailing.8milya.kz/contact"
      content="url-страницы"
    />
    <meta itemprop="sameAs" :content="info.instLink" />
    <div
      itemprop="aggregateRating"
      itemscope
      itemtype="https://schema.org/AggregateRating"
    >
      <meta itemprop="worstRating" content="4.8" />

      <meta itemprop="bestRating" content="5" />

      <meta itemprop="ratingValue" content="5" />

      <meta itemprop="ratingCount" content="1064" />
    </div>
  </div>
</template>
