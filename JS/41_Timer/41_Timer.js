// 타이머 함수

// 1. setTimeout() / clearTimer()
const timeOut = setTimeout(()=>console.log('A'),2000);

clearTimeout(timeOut); // 타이머 제거

// 2. 일정시간마다 반복
// setInterval()/clearInterval()
const myInterval = setInterval(()=> console.log('A'),1000);
clearInterval(myInterval); // 인터벌 제거


// 1~5를 1초마다 콘솔에 출력.
// 
// const myInterval2 = setInterval(()=> com(5),1000);

// function com(num){
//     for(let i=1;i<=num;i++){
//         console.log(i);
//     }
// }
let i=1;
const myInterval3 = setInterval(()=> add(i++),1000);

function add(num){
    if(num>=5){
        clearInterval(myInterval3);
    }
    console.log(num);
    // add(num++);
}
