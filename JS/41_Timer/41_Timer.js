// 타이머 함수

// 1. setTimeout() / clearTimer()
// const timeOut = setTimeout(()=>console.log('A'),2000);

// clearTimeout(timeOut); // 타이머 제거

// 2. 일정시간마다 반복
// setInterval()/clearInterval()
// const myInterval = setInterval(()=> console.log('A'),1000);
// clearInterval(myInterval); // 인터벌 제거

// 1~5를 1초마다 콘솔에 출력.
//
// const myInterval2 = setInterval(()=> com(5),1000);

// function com(num){
//     for(let i=1;i<=num;i++){
//         console.log(i);
//     }
// }
// let i=1;
// const myInterval3 = setInterval(()=> add(i++),1000);

// function add(num){
//     if(num>=5){
//         clearInterval(myInterval3);
//     }
//     console.log(num);
// add(num++);
// }

function Clock() {
    let currentDate = new Date();
    let Sclock = document.getElementById("Sclock");

    let show = "현재 시각 : ";
    Hours = currentDate.getHours();
    Minutes = currentDate.getMinutes();
    Seconds = currentDate.getSeconds();

    if(Hours <12){
        Sclock.innerText = show+"오전"+
            (Hours < 10 ? "0"+Hours : Hours) +
            ":" +
            (Minutes < 10 ? "0"+Minutes : Minutes) +
            ":" +
            (Seconds < 10 ? "0"+Seconds : Seconds);
    }else{
        Sclock.innerText = show+"오후"+
            (Hours < 10 ? "0"+Hours : Hours) +
            ":" +
            (Minutes < 10 ? "0"+Minutes : Minutes) +
            ":" +
            (Seconds < 10 ? "0"+Seconds : Seconds);
    }

    
}
let clock = setInterval(Clock, 1000);

function clear() {
    clearInterval(clock);
}
function Interval() {
    clock = setInterval(Clock, 1000);
}
const btn1 = document.querySelector("#btn1");
const btn2 = document.querySelector("#btn2");

btn1.addEventListener("mousedown", clear);
btn2.addEventListener("mousedown", Interval);
