<template>
  <img alt="Vue logo" src="./assets/logo.png" />
  <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  <!-- <div>
     <h4>{{ product1 }}</h4>
     <p>{{ price1 }}</p>
  </div>
  <div>
    <h4 :style="styleR">{{ product2 }}</h4>
    <p>{{ price2 }}원</p>
 </div> -->
  <div v-for="(item, price) in products" :key="(item, price)">
    <h4>
      {{ item.name }}
    </h4>
    <p>
      {{ item.price }}
    </p>
  </div>

  <p v-if="1==1">if문 테스트</p>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

export default {
  name: "App",
  data() {
    return {
      products: [
        { name: "티셔츠", price: "3800" },
        { name: "바지", price: "5000" },
        { name: "점퍼", price: "10000" },
      ],
      product1: "양말",
      price1: "3000",
      product2: "바지",
      price2: "4000",
      styleR: "color:red",
    };
  },
  components: {
    // HelloWorld
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
