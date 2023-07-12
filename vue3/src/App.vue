<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <p>{{ data.name }}</p>
  <router-link to="/">홈으로</router-link><br>
  <router-link to="/post">post로</router-link><br>

  <router-view v-if="flg" :test="222">
  <span>222</span><br>
  </router-view>

  <ContainerComponent v-if="flg"/>
  <!-- <PostComponent v-if="flg"/>
  <button @click="flg=!flg">버튼</button>
  <button @click="data.name='김기밈'">버튼</button> -->


  <p>{{ test }}</p>

  <button @click="test='김기밈'">버튼</button>

  <p>{{ data2.name }}</p>
  <button @click="data2.name='김기밈'">버튼</button>

<PostComponent :propsTest="1"></PostComponent>
</template>


<script>
import {ref,reactive} from 'vue';
// import ContainerComponent from './components/ContainerComponent.vue';
import PostComponent from './components/PostComponent.vue';

export default {
  name: 'App',
  setup(){
    let test = 'bbb';
    let data = ref({name:'홍길동',age:20});
    let data2=reactive({//객체만 데잍 바인딩
      name:'철수',
      age:5,
    })
  
    return { data,test,data2 };
  },
  data(){
    return{
      flg:true,
    }
  },
  components: {
    // ContainerComponent,
    PostComponent,
  }
}
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
