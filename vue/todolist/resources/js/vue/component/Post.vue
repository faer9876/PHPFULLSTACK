<template>
    <div v-for="(datas, i) in data" :key="i">
        <input type="checkbox" @click="updatedList()">
        <button @click="deleteList(datas.id); $emit('re');">삭제</button>
        <p>{{ datas.content }}</p>
        <p>{{ datas.created_at }}</p>
        <p>{{ datas.updated_at }}</p>
    </div>
</template>
<script>
import axios from "axios";

export default {
    name: "Post",
    props: {
        data: Array,
    },
    methods: {
        deleteList(i) {
            axios
                .delete('/api/items/' + i)
                .then((res) => {
                    console.log(res);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        updatedList(i) {
            axios.put('/api/items/' + i)
                .then((res) => {
                    const text = document.querySelector('p');
                    text.style.color = "red";
                    console.log(res);
                })
                .catch((err) => {
                    console.log(err);
                });
        }

    }
}
</script>
<style></style>