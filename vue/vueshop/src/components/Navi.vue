<template lang="">
  <!-- 네비 --> <div class="nav"> <a v-for="(item, i) in navList" :key="i">{{
    navList[i]
  }}</a> </div>
</template>
<script>
export default {
  name: "Navi",
  props: {
    navList: Array,
  },
};
</script>
<style lang=""></style>
