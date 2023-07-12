import { createStore } from "vuex";
import axios from "axios";

const store = createStore({
  state() {
    return {
      boardData: [], // 게시글 데이터 데이터 저장 변수
      lastId: "", // 가장 마지막에 로드된 게시물의 id
      addBtnFlg: true, // 더보기 버튼 표시용 flg
      tabFlg: 0, // 탭 ui flg(0:메인,1:필터,2:작성)
      imgUrl: "", // 이미지 url
      content: "",
      filter: [],
      imgFile: '',
    };
  },
  mutations: {
    // 초기 데이터 셋팅용
    createBoardData(state, data) {
      state.boardData = data;
      this.commit("changeLastId", data[data.length - 1].id);
    },
    // 더보기 데이터 셋팅용
    addBoardData(state, data) {
      state.boardData.push(data);
      this.commit("changeLastId", data.id);
    },
    // 작성글 데이터 세팅용
    addWriteData(state,data){
      state.boardData.unshift(data);
    },
    // lastId 변경
    changeLastId(state, id) {
      state.lastId = id;
    },
    // 탭 ui 플래그 변경
    changeTabFlg(state, num) {
      state.tabFlg = num;
    },
    // 이미지 url 변경
    changeImgUrl(state, imgUrl) {
      state.imgUrl = imgUrl;
    },
    removeImg(state) {
      state.imgUrl = "";
    },
    changeFilter(state, filter) {
      state.filter = filter;
    },
    changeFile(state, file) {
      state.imgFile = file;
    },
    //텍스트 추가
    inputText(state,content){
      state.content=content;
    },
    // 작성된 게시물 추가
    writeContent(state, data) {
      state.boardData.push(data);
    },
  },
  actions: {
    // 메인 게시글 습득
    getMainList(context) {
      axios
        .get("http://192.168.0.66/api/boards")
        .then((res) => {
          context.commit("createBoardData", res.data);
        })
        .catch((err) => {
          console.log(err);
        });
    },
    // 게시글 추가 습득
    getMoreList(context) {
      axios
        .get("http://192.168.0.66/api/boards/" + context.state.lastId)
        .then((res) => {
          if (res.data) {
            console.log(res.data);
            context.commit("addBoardData", res.data);
          } else {
            context.state.addBtnFlg = !context.state.addBtnFlg;
            alert("없음");
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
    // 게시글 작성
    writeContent(context) {
      // const data = {}

      const header = {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      };
      axios.post("http://192.168.0.66/api/boards",{
            name: "김영범",
            filter: context.state.filter,
            img: context.state.imgFile,
            content: context.state.content,
          }, header
        )
        .then((res) => {
          res.status;
          context.commit('addWriteData',res.data);
          context.commit('changeTabFlg',0);
          context.commit('removeImg');
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
});

export default store;
