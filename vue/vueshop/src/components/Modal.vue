<template lang="">
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
          <img :src="products[num].img" alt="" />
          <h4 >{{products[num].name}}</h4>
          <p>총액 : {{inputTest*products[num].price}} 원</p>
          <!-- <button @click="$emit('rise')">수량증가</button>
          <br /><br>
          <button @click="$emit('down')">수량감소</button> -->
          <input type="text" v-model="inputTest">
          <p>{{products[num].price}}원</p>
          <p>개수 : <span>{{inputTest}}</span></p>
          <button @click="$emit('closeModal'); inputTest=' ';">닫기</button>
        </div>
      </div>
</template>
<script>

export default {
    name: 'Modal',
    props:{
        products: Array,
        modalFlg:Boolean,
        num:Number,
    },
    data(){
      return{
        inputTest:'',
      }
    },
    watch:{
      inputTest(input){
      if(input>10){
        alert('10이하만 가능');
        this.inputTest='10'
      }
    }
    },
}
</script>
<style lang="">
    
</style>