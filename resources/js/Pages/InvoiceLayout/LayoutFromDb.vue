<script setup>
import { Link, Head } from '@inertiajs/vue3'

defineProps({ layout: Object })
</script>

<template>
    <Head title="layout" />

    <div class="container max-w-4xl mx-auto my-8">
        <h2 class="text-2xl font-semibold">{{ layout.title }}</h2>
        <div class="my-8 prose max-w-none" v-html="layout.content"></div>
    </div>
    
</template>