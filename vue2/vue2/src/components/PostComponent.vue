<template lang="">
    <div class="post" v-for="(data,i) in $store.state.boardData" :key="i">
        <div class="post-img" :style="{backgroundImage : `url('${data.img}')`}"></div>
        <div class="post-content">
            <p>{{$store.state.boardData[i].likes}} 좋아요</p>
            <p><strong>{{$store.state.boardData[i].name}}</strong> {{$store.state.boardData[i].content}}</p>
            <p>{{$store.state.boardData[i].created_at}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PostConponent',
}
</script>
<style>
  
</style>