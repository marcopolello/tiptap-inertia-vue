<script setup>
import { Head } from '@inertiajs/vue3';
const props = defineProps({
  layout: Object,
})
</script>

<template>
  <Head :title="layout.title" />

  <div class="container max-w-4xl mx-auto my-8">
    <h2 class="text-2xl font-semibold">{{ layout.title }}</h2>

    <div v-html="layout.content"></div>
  </div>
</template>