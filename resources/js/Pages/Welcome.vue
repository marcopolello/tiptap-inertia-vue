<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'
import MyEditor from '@/Components/MyEditor.vue'
import Sidebar from '@/Components/Sidebar.vue'

const props = defineProps({
  posts: Array,
})

const form = useForm({
  title: null,
  content: "<h1>Heading here</h1><p>I'm running Tiptap with Vue.js!!!! 🎉</p>",
})

function submitForm() {
  form.post('/', {
    preserveScroll: true,
    onSuccess: () => {
      form.reset();
      alert('Form submission success!')
    },
    onError: () => {
      alert('Form submission failed!')
    }
  })
}
</script>

<template>
  <Head title="Welcome" />

  <br>
  <Sidebar />
  <br>
  <div class="container max-w-4xl mx-auto my-8">
    <form @submit.prevent="submitForm" class="space-y-8">
      <input
        type="text"
        class="w-full p-2 border border-gray-400"
        v-model="form.title"
      />

      <MyEditor v-model="form.content" />
      <!-- <textarea
        name="content"
        id="content"
        cols="30"
        rows="10"
        class="w-full"
        v-model="form.content"
      ></textarea> -->

      <button type="submit" class="p-2 text-white bg-blue-600 rounded">
        Create Post
      </button>
    </form>

    <section class="my-8">
      <ul class="list-disc list-inside">
        <li v-for="post in posts" :key="post.id">
          <Link
            :href="route('post.show', post)"
            class="text-blue-600 hover:underline"
            >{{ post.title }}</Link
          >
        </li>
      </ul>
    </section>
  </div>
</template>
