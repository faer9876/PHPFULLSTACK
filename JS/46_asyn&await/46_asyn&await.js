//동기처리
// function delay(){
//     const delayTime=Date.now()+2000;
//     while(Date.now()<delayTime){}
//     console.log('B');
// }
// console.log('A');
// delay();
// console.log('C');

// function delay2(str, time) {
//     return new Promise((resolve, reject) => {
//         const delayTime = Date.now() + time;
//         while (Date.now() < delayTime) {}
//         resolve(console.log(str));
//     });
// }
// delay2("A", 0)
//     .then(() => {
//         delay2("B", 2000);
//     })
//     .then(() => {
//         delay2("C", 0);
//     });

//비동기 처럼 보이게 바꾸기
// function delay3() {
//     return new Promise(function (resolve) {
//         const delayTime = Date.now() + 2000;
//         while (Date.now() < delayTime) {}
//         resolve("B");
//     });
// }
// console.log("A")
// delay3().then(b=>console.log(b));
// console.log("C");

// async로 비동기 처리로 만들기 return 있어야 함
// async function delay4() {
//         const delayTime = Date.now() + 2000;
//         while (Date.now() < delayTime) {}
//         return "B";
//     }

// console.log("A")
// delay4().then(b=>console.log(b));
// console.log("C");


// await : async가 붙은 함수안에서만 사용 가능
function myDelay(ms){
    return new Promise(resolve=>setTimeout(resolve, ms));
}

async function getA(){
    await myDelay(1000);
    return 'A';
}
async function getB(){
    await myDelay(2000);
    return 'B';
}

// async function getAll(){
//     const strA= await getA();
//     const strB= await getB();

//     console.log(`${strA}:${strB}`);
// }

// getAll();

// getA()
// .then(async strA=>{const strB = await getB();
// return console.log(`${strA} : ${strB}`);});

// 병렬처리
async function getAll3(){
    Promise.all([getA(),getB()])
    .then(all=>console.log(all.join()));
}
getAll3()
.then(strAll=>console.log(strAll))
.catch('error');