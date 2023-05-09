
// setTimeout(() => {
//     console.log('A');
// }, 3000);


// setTimeout(() => {
//     console.log('B');
// }, 2000);



// setTimeout(() => {
//     console.log('C');
// }, 1000);



//콜백함수 이용해서 A,B,C 순서로 콘솔에 출력
//promise 이용해서 A,B,C순서로 콘솔에 출력
// const settime = setTimeout(() => {
//     console.log('A');
//     setTimeout(() => {
//         console.log('B');
//         setTimeout(() => {
//             console.log('C');
//         }, 1000);
//     }, 2000);
// }, 3000);


function printA() {
return new Promise((resolve, reject) => {
    setTimeout(() => {
    resolve(console.log('A'));
    }, 3000);
});
}

function printB() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
        resolve(console.log('B'));
    }, 2000);
    });
}

function printC() {
    return new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve(console.log('C'));
        }, 1000);
    });
}

printA()
.then(()=>printB())
.then(()=>printC());

// function Settime() {
//     return printA()
//     .then(() => printB())
//     .then(() => printC());
// }

// Settime();

// function promise(str,time){
//     return new Promise((resolve)=>{
//         setTimeout(() => {
//             resolve(console.log(str))
//         }, time);
//     });
// }

// promise('A',3000)
// .then(()=> promise('B',2000))
// .then(()=> promise('C',2000))



