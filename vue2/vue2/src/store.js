import {createStore} from 'vuex'
import axios from 'axios'

const store = createStore({
    state(){
        return{
            boardData:[],//게시글 데이터 데이터 저장 변수
            lastId:'',//가장 마지막에 로드된 게시물의 id
            addBtnFlg:true,//더보기 버튼 표시용 flg
            tabFlg: 0,// 탭 ui flg(0:메인,1:필터,2:작성)
            imgUrl: '',//이미지 url
            filter:[],
        }
    },
    mutations:{
        //초기 데이터 셋팅용
        createBoardData(state,data){
            state.boardData=data;
            this.commit('changeLastId',data[data.length-1].id)
        },
        // 더보기 데이터 셋팅용
        addBoardData(state,data){
            state.boardData.push(data);
            this.commit('changeLastId',data.id)
        },
        // lastId 변경
        changeLastId(state,id){
            state.lastId=id;
        },
        //탭 ui 플래그 변경
        changeTabFlg(state,num){
            state.tabFlg = num;
        },
        //이미지 url 변경
        changeImgUrl(state,ImgUrl){
            state.imgUrl = ImgUrl;
        },
        removeImg(state){
            state.imgUrl='';
        },
        changeFilter(state,filter){
            state.filter=filter;
        },
        removeFilter(state){
            state.filter='';
        },
    },
    actions:{
        getMainList(context){
            axios.get('http://192.168.0.66/api/boards')
            .then(res=>{
                // context.boardData=res.data;
                context.commit('createBoardData',res.data);
            })
            .catch(err=>{
                console.log(err);
            })
        },
        getMoreList(context){
            axios.get('http://192.168.0.66/api/boards/'+context.state.lastId)
            .then(res=>{
                if(res.data){
                console.log(res.data);
                context.commit('addBoardData',res.data);
            }else{
                // document.getElementById('hi').style.display="none";
                context.state.addBtnFlg=!context.state.addBtnFlg;
                alert('없음');
            }
            })
            .catch(err=>{
                console.log(err);
            })
    }
    },
})

export default store