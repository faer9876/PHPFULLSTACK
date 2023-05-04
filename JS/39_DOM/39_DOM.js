//1. 요소를 선택하는 방법
//1-1. id로 선택하는 방법
//      document.getElementById
const title = document.getElementById('title');

// 1-2. 태그명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');

li[1].style.color='yellow';
li[2].style.color='red';

//탕수육 볶음밥 깐풍기는 배경색상을 오렌지색
//짜장면 짬뽕 라조기는 배경색상을 베이지색

for(let i=0;i<li.length;i++){
    if(i%2==0){
        li[i].style.backgroundColor= 'orange';
    }else{
        li[i].style.backgroundColor= 'beige';
    }
}

//3. 클래스명으로 요소를 선택하는 방법
const noneli=document.getElementsByClassName('none-li');

// 4. css선택자로 요소를 선택하는 방법
// 복수의 요소가 있다면 가장 첫번째 것만 선택
const title2 =document.querySelector('#title');
const li2=document.querySelector('.none-li');

// querySelectAll(); 복수의 요소 전부 선택
const li3=document.querySelectorAll('.none-li');


//2. 요소 조작하기
//2-1. 콘텐츠를 조작하는 방법
//순수한 텍스트 데이터 전달
//이전의 테그들은 모두 제거
title.textContent ='<span>바꿈<span>';

//inner는 테그는 테그로 인식해서 전달
title.innerHTML='<span>inner로 바꿈<span>';

const div1 = document.querySelector('#div1');

// 요소에 속성을 추가
const it = document.querySelector('#it');
const it2= document.getElementById('it');
// it.setAttribute('placeholder','insert by setAttribute');

const aa=document.getElementById('aa');
aa.setAttribute('href','http://www.naver.com');

//요소의 속성을 제거
it.removeAttribute('placeholder');

//요소의 스타일링
//인라인으로 스타일 추가
// aa.style.textDecoration = 'none';
// aa.style.color = 'skyblue';

//클래스로 스타일 추가
aa.classList.add('aa1','aa2','aa3');


//새로운 요소 만들기
//요소 만들기
const cli=document.createElement('li');

cli.innerHTML='야끼우동';

// 요소를 자식요소의 가장 마지막에 삽입
const ul=document.getElementsByTagName('ul');
ul[0].appendChild(cli);

//해당 요소를 지우는 방법
// cli.remove();

//요소를 특정 위치에 삽입하는 방법
const al=document.getElementsByClassName('none-li');
let s=al[2];

ul[0].insertBefore(cli,s);

//라조기와 깐풍기 사이에 잡채밤, 동파육을 순서대로 넣고
// 배경색을 넣은것도 제대로 나오도록 수정

let s2=al[4];
let s3=al[5];
const cli2=document.createElement('li');
const cli3=document.createElement('li');
cli2.innerHTML='잡채밥';
cli3.innerHTML='동파육';

ul[0].insertBefore(cli2,s3)
ul[0].insertBefore(cli3,s3)

let a=li[6];
for(let i=0;i<li.length;i++){
    if(i%2==0){
        li[i].style.backgroundColor= 'orange';
    }else{
        li[i].style.backgroundColor= 'beige';
    }
}


