// 함수

// 함수 선언문

function add(a, b) {
    return a + b;
}

// 함수 표현식
let add2 = function (a, b) {
    return a + b;
};

// 익명 함수
// function(a,b){
//    return a+b;
//}

// 화살표 함수 : 리턴값만 있는 경우 한줄로 표현 가능
let test1 = () => "안녕";
let add3 = (a, b) => a + b;

// Fucntion 생성자 함수
let add4 = Function("a", "b", "return a+b");

//------------------------
//호이스팅 (hoisting)
//-----------------------
//인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// 인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어올려지는 것
console.log(hTest());
console.log("51 line : " + VarTest);
// console.log("51 line : " + letTest);
// console.log("51 line : " + constTest);
function hTest() {
    return "함수 : hTest";
}
var VarTest = "Var : var변수";
console.log("58 line : " + VarTest);

let letTest = "let 변수";
const constTest="const 상수";