<template>
  <img alt="Vue logo" src="./assets/logo.png" />

  <!-- 네비 -->
  <Navi :navList="navList" />
  <!-- <div class="nav">
    <a href="">홈</a>
    <a href="">상품</a>
    <a href="">기타</a>
  </div> -->
  <!-- <input type="text" @input="inputTest=$event.target.value;"> -->
  <!-- <input type="text" v-model="inputTest" />
  <br />
  <span>{{ inputTest }}</span>
  <br /> -->
  <div class="discount">
    <p>지금 당장 구매하시면, {{ discounted }}% 할인</p>
  </div>

  <!-- 모달 -->
  <!-- <div class="startTransition" :class="{endTransition : modalFlg}"> -->
  <transition name="tran">
    <Modal
      @closeModal="
        modalFlg = false;
        inputTest = ' ';
      "
      :modalFlg="modalFlg"
      :num="num"
      :products="products"
    />
  </transition>

  <!-- <Modal
    @closeModal="modalFlg = false"
    :modalFlg="modalFlg"
    :num="num"
    :products="products"
    @rise="plus(num)"
    @down="minus(num)"
  /> -->
  <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  <!-- <div>
     <h4>{{ product1 }}</h4>
     <p>{{ price1 }}</p>
  </div>
  <div>
    <h4 :style="styleR">{{ product2 }}</h4>
    <p>{{ price2 }}원</p>
 </div> -->
  <!-- <div v-for="(item, i) in products" :key="i">
    <img :src="item.img" alt="img" />
    <h4 @click="openModal(i)">
      {{ item.name }}
    </h4>
    <p>{{ item.price }}원</p>
    <p>{{ item.count }}개</p>
  </div> -->
  <ProductList
    :product="product"
    v-for="(product, i) in products"
    :key="i"
    @openModal="
      modalFlg = true;
      num = i;
    "
  />

  <!-- <p v-if="1 == 1">if문 테스트</p> -->
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import data from "./assets/js/data.js";
import Navi from "./components/Navi.vue";
import ProductList from "./components/ProductList.vue";
import Modal from "./components/Modal.vue";

export default {
  name: "App",
  data() {
    return {
      hookTest: false,
      discounted: "20",
      navList: ["홈", "상품", "기타"],
      inputTest: "",
      // count : 0,
      num: 0,
      products: data,
      modalFlg: false,
      // [
      //   { name: "티셔츠", price: "3800", count: "0", img: require("@/assets/T-shirt.jpg")},
      //   { name: "바지", price: "5000", count: "0", img: require("@/assets/pants.jpg")},
      //   { name: "점퍼", price: "10000", count: "0",img: require("@/assets/jumper.jpg")},
      // ],
      product1: "양말",
      price1: "3000",
      product2: "바지",
      price2: "4000",
      styleR: "color:red",
    };
  },
  watch: {
    inputTest(input) {
      if (input == 3) {
        alert("3333");
        this.inputTest = "";
      }
    },
  },
  methods: {
    //함수를 설정하는 영역
    plus(i) {
      this.products[i].count++;
    },
    minus(i) {
      if (this.products[i].count > 0) {
        this.products[i].count--;
      }
    },
    openModal(i) {
      this.modalFlg = true;
      this.num = i;
    },
  },
  components: {
    // 컴포넌트 정의
    Navi: Navi,
    ProductList: ProductList,
    Modal: Modal,
  },
  mounted() {
    this.timer = setInterval(() => {
      this.discounted--;
    }, 1000);
  },
  updated() {
    if (this.discounted == 0) {
      clearInterval(this.timer);
    }
  },
};
</script>

<style>
@import url("./assets/css/app.css");

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.nav {
  background-color: #2c3e50;
  padding: 15px;
  border-radius: 10px;
}
.nav a {
  color: white;
  padding: 10px;
}
</style>
