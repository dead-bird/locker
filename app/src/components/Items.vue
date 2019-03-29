<script>
import Quotes from "@/components/blocks/Quotes";
import Videos from "@/components/blocks/Videos";

import axios from "axios";

export default {
  components: { Quotes, Videos },

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
    <div v-for="item in items" :key="item.id">
      <h1>{{ item.title }}</h1>

      <p>NSWF? {{ item.nsfw }}</p>

      <div v-html="item.description"></div>

      <a
        v-if="item.discord"
        class="button"
        target="_blank"
        rel="noopener"
        :href="item.discord"
      >View on Discord</a>

      <div class="row">
        <div v-for="block in item.attachments" :key="block.id" class="col-sm-4">
          <component :is="block.type" :block="block"></component>
        </div>
      </div>

      <h2>Tagged</h2>

      <div class="buttons">
        <div class="button" v-for="tag in item.tags" :key="tag.id">{{ tag.title }}</div>
      </div>

      <hr>
    </div>
  </div>
</template>

<style scoped>
</style>
