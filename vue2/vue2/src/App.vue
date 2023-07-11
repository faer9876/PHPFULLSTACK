<template>
  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li class="header-button header-button-left" v-if="$store.state.tabFlg!=0" @click="$store.commit('changeTabFlg',0); $store.commit('removeFilter'); $store.commit('removeImg')">취소</li>
      <li>
        <img src="./assets/logo.png" alt="vue logo" class="logo" />
      </li>
      <li class="header-button header-button-right" v-if="$store.state.tabFlg==1" @click="$store.commit('changeTabFlg',2)">다음</li>
    </ul>
  </div>
  <!-- {{ $store.state.lastId }} -->

  <!-- 컨텐츠 -->
  <ConteinerComponent/>
  <button v-if="$store.state.addBtnFlg && $store.state.tabFlg==0" @click="$store.dispatch('getMoreList')" id="hi">더보기</button>

  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store">+</label>
      <input accept="image/*" type="file" id="file" class="input-file" @change="updateImg"/>
    </div>
  </div>
</template>

<script>
import ConteinerComponent from "./components/ConteinerComponent.vue";

export default {
  name: 'App',
  created(){
    this.$store.dispatch('getMainList');
  },
  methods:{
    updateImg(e){
      let file = e.target.files;
      let ImgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl',ImgUrl);
      this.$store.commit('changeTabFlg',1);
      e.target.value='';
    }
  },
  components: {
    ConteinerComponent : ConteinerComponent,

  },
}
</script>

<style>
@import url(./assets/css/common.css);
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
