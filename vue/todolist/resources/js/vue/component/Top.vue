<template>
    <div>
        <label for="input"></label>
        <input v-model="content" type="text" name="input" id="input" placeholder="적으세요">

        <button @click="$emit('insert2', content); content = '';">게시</button>
    </div>
</template>
  
<script>
export default {
    name: "Top",
    data() {
        return {
            content: '',
        }
    }
};
</script>
  
<style></style>