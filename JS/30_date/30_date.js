

//DATE
// const NOW=new Date('2023-04-30 15:20:30.123');

//연도만 가져오는 method -> getFullYear()
// console.log("연도 : "+NOW.getFullYear());

//월을 가져오는 method -> getMonth()
// console.log("월 : "+(NOW.getMonth()+1)); // 0~11까지 가져옴

//날짜을 가져오는 method : getDate()
// console.log("일 : "+NOW.getDate());

//요일을 가져오는 method : getDay() 일~토 0~6
// console.log("요일 : "+NOW.getDay());


//시간을 가져오는 method : getTime() 1970/01/01 기준으로 몇초가 지났는지
// console.log("시간(Linux) : "+NOW.getTime());

// 시간 : getHours()
// console.log("시 : "+NOW.getHours());

// 분 : getMinutes()
// console.log("분 : "+NOW.getMinutes());

// 초 : getSeconds()
// console.log("초 : "+NOW.getSeconds());

// 밀리초 : getMilliseconds()
// console.log("초 : "+NOW.getMilliseconds());

//기준일 : 2022년 9월 30일 19시 20분 10초
//오늘로 부터 몇일 전인지
const gDATE=new Date('2022-09-30 19:30:10');
const nDATE=new Date();

let get=nDATE-gDATE;

//초->날짜
let sell=get/86400000;
let count=Math.ceil(sell);

console.log(count+":일 전임");

count*1440; // 분

sell/1000; // 초

const YDATE=gDATE.getFullYear();
const YDATE2=nDATE.getFullYear();

const MDATE=gDATE.getMonth();
const MDATE2=nDATE.getMonth();

let x=YDATE2-YDATE;
let x2=MDATE2-MDATE;

let com=x*12+x2-1; // 개월 수 차이

let gap=sell/30;
let gap2=sell%30;

console.log(Math.round(gap)+"개월"+Math.round(gap2)+"일 차이");




