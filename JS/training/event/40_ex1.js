//버튼 클릭 시 아래 내용의 alert 출력
// (안녕하세요 숨어있는 div를 찾아보세요.)
// 특정 역영에 마우스 포인터가 진입하면 아래 내용 alert 출력
// (두근두근)
// 2번의 영역을 클릭하면 색 변경 다시 누르면 그대로 beige
// (다시 숨는다)

const b1 = document.querySelector("#b1");
b1.addEventListener("mouseenter", showNotification);
b1.addEventListener("mousedown", toggleColor);

function toggleColor() {
    if (b1.style.backgroundColor === "green") {
        b1.style.backgroundColor = "beige";
        b1.removeEventListener("mouseenter", showNotification);
        b1.removeEventListener("mousedown", handleClick());
    } else {
        b1.style.backgroundColor = "green";
        b1.removeEventListener("mousedown", handleClick2());
        b1.addEventListener("mouseenter", showNotification);
        let rand = Math.round(Math.random() * 900) + "px";
        b1.style.margin = rand;
    }
}

function handleClick() {
    alert("들켰다");
}

function handleClick2() {
    alert("다시숨는다");
}

function showNotification() {
    alert("두근두근");
}
