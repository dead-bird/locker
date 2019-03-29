<script>
import axios from "axios";

export default {
  data: () => ({
    items: []
  }),

  methods: {
    fetch() {
      axios
        .get("http://localhost:8888/locker/items")
        .then(res => {
          this.items = res.data.data;
        })
        .catch(e => {
          console.log(e);
        });
    }
  },

  created() {
    this.fetch();
  }
};
</script>

<template>
  <div class="container">
    <pre>{{ items }}</pre>
  </div>
</template>

<style scoped>
</style>
