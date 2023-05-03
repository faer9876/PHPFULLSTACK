// let arr = [1, 2, 3, 4, 5];

// 배열에 값 추가
// $arr[] = 1;

// push() method : 배열에 값 추가 순서대로 들어감
// delete 하면 지워지고 방은 그대로 남아 있음
// arr.push(6);

// 배열의 값 삭제(index보존)
// delete arr[5];

// splice() method : 배열의 요소를 삭제 또는 교체 slice
// arr.splice(2,1);// 2 삭제
// arr.splice(2,1,3);// 2->3 교체
// arr.splice(2,0,3);// arr[2]에 3 추가
// arr.splice(2,0,3,11,12,13);// 3번째 부터는 가변 파라미터로 값 추가

// indexOf() method : 배열에서 특정 요소를 찾는데 사용
// let arr2 =[1,2,3,4,5];
// arr2 =[1,2,3,4,3,5,6,6,1];
// arr2.lastIndexOf(6);

// let fileName = 'javaScript.log.php';
// let first=fileName.indexOf('.');
// let second=fileName.lastIndexOf('.');
// fileName.slice(0,first);
// fileName.slice(first+1,second);
// fileName.slice(second+1,fileName.length);
//javaScript
//log
//php

//concat() method : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환
// let arrCon1 = [1, 2, 3];
// let arrCon2 = [10, 20, 30];
// let arrCon4 = [100, 200, 300];
// let arrCon3 = arrCon1.concat(arrCon2, arrCon4);
// console.log(arrCon3);

// includes() method : 배열이 특정요소를 가지고 있느지 판별
// let arrInc=[1,2,3,4];
// console.log(arrInc.includes(7));
// let a= arrCon1.includes(3);
// console.log(a);

// // sort() method : 배열의 요소를 아스키 코드 기준 정렬해서 반환
// const arrSort = [6 ,3 ,5 ,8, 95,100 ]
// console.log(arrSort.sort());// [100, 3, 5, 6, 8, 95] 제일 앞자리 기준으로만 정렬
// arrSort.sort(
//     function(a,b){
//         return a-b; // 결과 값이 양수 일 경우 자리 교체
//         //반대일 경우 내림차순 정렬
//     }
// )

// arrSort.sort((a,b)=>a-b); // 오름차순
// arrSort.sort(function(a,b){return a-b}); // 오름차순
// arrSort.sort((a,b)=>b-a); // 내림차순

// join() method : 배열의 모든 요소를 연결해서 하나의 문자열 만듦
// const arrJoin = ["안녕","하세","요"];
// const ar=arrJoin.join();
// const ar1=arrJoin.join('');
// const ar2=arrJoin.join('/');
// console.log(ar);
// console.log(ar1);
// console.log(ar2);

//every() method : 배열의 요소들이 주어진 함수를 통과하는 지 판별
// const arrEvery = [1,2,3,4,5];
// let result = arrEvery.every(function(val){
// return val <=5;
// });
// console.log(result); // 조건 모두 통과시 true 하나라도 통과 못하면 false

// 모든 요소의 2로 나눈 나머지가 0인지 판별

// const arrEvery2=[1,2,3,4,5];
// let result2=arrEvery2.every((num) => num%2 === 0);

// console.log(result2);

// some() method : 배열 안에 어떤 요소라도 주어진 함수를 통과하는 지 판별
const arrSome = [1, 2, 3, 4, 5];
let result = arrSome.some((val) => val >= 5); // 일부만 만족해도 됨
console.log(result);


// filter() method : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 변환
const arrFilter = [1,2,3,4,5];
let result2= arrFilter.filter(val=>val >=3);
console.log(result2);