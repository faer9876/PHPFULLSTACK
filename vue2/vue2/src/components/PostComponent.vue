<template lang="">
    <div class="post" v-for="data in $store.state.boardData" :key="data">
        <div class="post-img" :class="data.filter" :style="{backgroundImage : `url('${data.img}')`}"></div>
        <div class="post-content">
            <p>{{data.likes}} 좋아요</p>
            <p><strong>{{data.name}}</strong> {{data.content}}</p>
            <p>{{data.created_at}}</p>
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