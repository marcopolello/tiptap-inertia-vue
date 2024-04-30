<script>
import axios from 'axios';

export default {
  data() {
    return {
      layout: [],
    };
  },
  created() {
    axios.get(route('layout.index'))
      .then(response => {
        this.layout = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};
</script>

<template>

</template>

<style>
</style>