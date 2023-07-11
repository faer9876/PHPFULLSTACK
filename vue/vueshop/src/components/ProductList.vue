<template lang="">
  <div> <img :src="product.img" alt="" /> <h4 @click="$emit('openModal');">{{
    product.name
  }}</h4> <p>{{ product.price }}원</p> <p>{{ product.count }}개</p> </div>
</template>
<script>
export default {
  name: "ProductList",
  modalFlg: true,
  props: {
    product: Object,
  },
};
</script>
<style lang=""></style>
