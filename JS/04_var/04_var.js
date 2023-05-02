// console.log("안녕하세요. js파일입니다.", "두번째");

//-----------------------------
//변수
//-----------------------------
// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이";
// u_name = "갑돌이";
// console.log(u_name);

// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// u_age = 30;

// 상수 : 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
// const gender = "남자";
// gender = "여자";

//---------
// 스코프
//---------

// 전역 스코프
let u_name = "홍길동";

// 함수 레벨 스코프
function test() {
    console.log(u_name);
    let u_age = "30";
    console.log(u_age);
}

// 블록 레벨 스코프
function test1() {
    let v_test1 = "함수 테스트1";
    if (true) {
        var v_var1 = "var로 선언";
    }
    console.log(v_test1); //블록레벨
    console.log(v_var1); // 함수레벨
}
