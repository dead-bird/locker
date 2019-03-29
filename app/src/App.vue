<script>
import Top from "./components/Top";
import Items from "./components/Items";

export default {
  components: { Top, Items }
};
</script>

<template>
  <div>
    <Top/>
    <Items/>
  </div>
</template>

<style lang="scss">
@import "~bootstrap/scss/bootstrap-reboot.scss";
@import "~bootstrap/scss/bootstrap-grid.scss";

.buttons {
  display: flex;
  margin-left: -2.5px;
  margin-right: -2.5px;

  .button {
    margin-left: 2.5px;
    margin-right: 2.5px;
  }
}

.button,
a.button {
  display: inline-block;
  padding: 10px;
  border-radius: 5px;
  border: 2px solid #212529;
  line-height: 1;
  margin-bottom: 15px;
  cursor: pointer;
  color: #212529;
  background-color: #fff;

  &:hover {
    color: white;
    background-color: #212529;
    text-decoration: none;
  }
}

pre {
  font-size: 12px;
  padding: 15px;
  border: 2px dashed tomato;
}

hr {
  border: 0;
  border-top: 2px dashed #ababab;
  margin: 45px 0;
}

video {
  max-width: 100%;
}
</style>
