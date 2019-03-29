<script>
export default {
  props: ["block"]
};
</script>

<template>
  <div>
    <h2>Notable Quotes</h2>

    <blockquote v-for="quote in block.quote" :key="quote.id" v-html="quote.text"></blockquote>
  </div>
</template>

<style scoped lang="scss">
blockquote {
  border-left: 4px solid #ababab;
  padding: 15px;

  margin-bottom: 15px;

  :last-child {
    margin-bottom: 0;
  }
}
</style>
