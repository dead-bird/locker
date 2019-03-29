<script>
export default {
  props: ["block"]
};
</script>

<template>
  <div>
    <h2>Videos</h2>

    <div v-for="video in block.videos" :key="video.id">
      <p>
        <strong>{{ video.title }}</strong>
      </p>

      <video controls :src="video.url"></video>
    </div>
  </div>
</template>

<style scoped>
</style>
