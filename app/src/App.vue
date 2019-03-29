<template>
  <div>
    <Items/>
  </div>
</template>

<script>
import Items from "./components/Items";

export default {
  components: {
    Items
  }
};
</script>

<style lang="scss">
@import "~bootstrap/scss/bootstrap-reboot.scss";
@import "~bootstrap/scss/bootstrap-grid.scss";

pre {
  font-size: 12px;
  padding: 15px;
  border: 4px dashed cornflowerblue;
}
</style>
