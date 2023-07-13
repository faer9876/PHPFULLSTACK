<template>
    <div>
        <Top @insert2="insertList($event)" />
    </div>
    <Post :data="data" @re="getMainList()" />
</template>
      
<script>
import Top from "./component/Top.vue";
import axios from "axios";
import Post from "./component/Post.vue";

export default {
    name: "App",
    data() {
        return {
            data: [],
            content: "",
            itemId: '',
        };
    },
    components: {
        Top: Top,
        Post: Post,
    },
    created() {
        this.getMainList();
    },
    methods: {
        getMainList() {
            axios
                .get("/api/items")
                .then((res) => {
                    this.data = res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        insertList(content) {
            const header = {
                headers: {
                    "Content-Type": "application/json",
                },
            };

            const data = {
                item: {
                    content: content,
                },
            };

            axios
                .post("/api/items", data, header)
                .then((res) => {
                    console.log(res);
                    this.getMainList();
                })
                .catch((err) => {
                    console.log(err);
                });
        },

    },
};
</script>
      
<style></style>
  