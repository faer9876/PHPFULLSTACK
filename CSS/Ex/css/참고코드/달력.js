// 함수 생성자 선언
const Day = document.querySelector('.day');
const month = document.querySelector('.month-name');
const date = new Date();

const pre = document.querySelector('.left');
const next = document.querySelector('.right');

const todoField = document.querySelector('.todo');
const todoTitle = document.querySelector('.todo-title');
const todoList = document.querySelector('.todoList');

const input = document.querySelector('input[type="text"]');
const add = document.querySelector('.add');
const reset = document.querySelector('.reset');
const allReset = document.querySelector('.allreset');

// 함수 받기 현재 년,달,일
let currentMon = date.getMonth()+1;   
let currentYear = date.getFullYear();
let currentDay = date.getDate();

let DayOfChoice = currentDay;
let MonOfChoice = currentMon;
let yearOfChoice = currentYear;

let year = currentYear;
let mon = currentMon;

let clickEventArr = [];
let storeToDo = [];

// 윤년인지 확인
function isLeapYear(year){
    return (year%4==0)&&(year%400==0||year%100!=0);
}

// 홀수달 31일,짝수 30일 윤년 29일
function getDayOfMon(mon,year){
    if(mon===1||mon===3||mon===5||mon===7||mon===8||mon===10||mon===12){
        return 31;
    }
    else if(mon===2){
        return isLeapYear(year)? 29 : 28;
    }
    else{
        return 30;
    }
}

// 몇년 몇월 몇일인지 구하기
function getDay(year,mon,date){
    const conYMD = year+'-'+mon+'-'+date;
    return(new Date(conYMD).getDay());
}

// list형태로 달력 작성
function makeCalendar(year,mon,dayCount){
    clickEventArr=[];
    Day.innerHTML='';
    let getFirstDay = getDay(year,mon,1);
    // 전달 입력받음 입력한 달이 0 미만이면 12 받음
    let previousMon;
    if(currentMon-1<0){
        previousMon = 12;
    }
    // 0미만이 아니면 현재 달에서 1빼기
    else{
        previousMon = currentMon - 1;
    }
    let getDayOfPreMon = getDayOfMon(previousMon,year);
    for(let i=(getFirstDay+6)%7; i>0; i--){
        const listPre = document.createElement('li');
        listPre.textContent = `${getDayOfPreMon-(i-1)}`;
        listPre.style.opacity = '0.5';
        listPre.classList.add('disabled');
        Day.appendChild(listPre);
    }

    for(let i=1; i<=dayCount; i++){
        if(i===currentDay&&year===currentYear&&mon===currentMon){
            //선택한 년, 월, 일 다를 때 현재 날짜에 검은색 테두리
            const onlyOneList = document.createElement('li');

            onlyOneList.textContent = `${i}`;
            if(currentYear === yearOfChoice && currentMon === MonOfChoice && currentDay === DayOfChoice){
                onlyOneList.style.border = '3px solid red';
            }
            else{
                onlyOneList.style.border = '3px solid black';
            }

            if(0===getDay(year,mon,i)){
                onlyOneList.style.color = 'red';
            }
            else if(6==getDay(year,mon,i)){
                onlyOneList.style.color = 'blue';
            }

            //현재 년, 월 같을 때 즉 오늘 일때 박스 검은색으로 표시
            
            Day.addEventListener('click',(event)=>{
                if(event.target!==onlyOneList){
                    onlyOneList.style.border = '3px solid black';
                }
            });

            Day.appendChild(onlyOneList);
            continue;
        }
        // 현재 일수 다를때 선택하면 빨간색 표시
        const list = document.createElement('li');
        list.textContent = `${i}`;
        if(i===DayOfChoice&&year===yearOfChoice&&mon===MonOfChoice){
            list.style.border = '3px solid red';
            Day.addEventListener('click',(event)=>{
                if(event.target!==list){
                    list.style.border = 'none';
                }
            });
        }    

        // 토요일6 파란색, 일요일0 빨간색 설정
        if(0===getDay(year,mon,i)){
            list.style.color = 'red';
        }
        else if(6==getDay(year,mon,i)){
            list.style.color = 'blue';
        }

        Day.appendChild(list);
    }
}

function setMonthTitle(year,mon){
    month.textContent = `${year}.${mon}`
}

// 선택 달이 12가 넘어가면 year+1하고 mon 1로 초기화
function nextMonthOrYear(){
    if(mon===12){
        year = year+1;
        mon = 1;
    }
    // 12 안넘으면 mon+1
    else{
        mon = mon+1;
    }
    setMonthTitle(year,mon);
    makeCalendar(year,mon,getDayOfMon(mon,year));
}

// 전년도 표현하기
function preMonthOrYear(){
    if(mon===1){
        year = year-1;
        mon = 12;
    }
    else{
        mon = mon-1;
    }
    setMonthTitle(year,mon);
    makeCalendar(year,mon,getDayOfMon(mon,year));
}

// 텍스트로 입력받고 현재일 입력받기
function main(){
    setMonthTitle(year,mon);
    makeCalendar(year,mon,getDayOfMon(mon,year));
    todoTitle.textContent = `What are you going to do on ${year}.${mon}.${currentDay} 👀⁉`;
    displayToDoOnDays();
}

function displayToDoOnDays(){
    todoList.innerHTML='';
    const YMD = year+'-'+mon+'-'+DayOfChoice;
    let arrayToDo;
    const elementToDo = document.createElement('li');
    if(!localStorage.getItem(YMD)){
        return;
    }
    if(localStorage.getItem(YMD).includes(',')){
        
        arrayToDo = localStorage.getItem(YMD).split(',');
        arrayToDo.forEach((value)=>{
            const deleteBtn = document.createElement('button');
            deleteBtn.setAttribute('class','deleteBtn');
            deleteBtn.innerHTML = '<i class="far fa-minus-square"></i>';
            const elementToDo = document.createElement('li');
            
            elementToDo.innerText = value;
            elementToDo.appendChild(deleteBtn);

            elementToDo.scrollTo();

            todoList.appendChild(elementToDo);
        });
        
    }
    else{
        const deleteBtn = document.createElement('button');
        deleteBtn.setAttribute('class','deleteBtn');
        deleteBtn.innerHTML = '<i class="far fa-minus-square"></i>';

        elementToDo.textContent = localStorage.getItem(YMD);
        elementToDo.appendChild(deleteBtn);
        todoList.appendChild(elementToDo);
    }
}

pre.addEventListener('click',preMonthOrYear);
next.addEventListener('click',nextMonthOrYear);


function clearEvent(){
    clickEventArr.forEach((value)=>{
        value.style.border = 'none';
    });
}

Day.addEventListener('click',(event)=>{
    if(event.target.tagName==='UL')return;
    if(event.target.className!=='disabled'){
        clearEvent();
        todoTitle.textContent = `What are you going to do on ${year}.${mon}.${event.target.textContent} 👀⁉`;
        event.target.style.border='3px solid red';
        DayOfChoice = (event.target.textContent)*1;
        MonOfChoice = mon;
        yearOfChoice = year;
        
        displayToDoOnDays();
        clickEventArr.push(event.target);
        console.log(clickEventArr);
        input.focus();
    }
    
});

function keepStore(){
    const YMD = year+'-'+mon+'-'+DayOfChoice;
    let arrayToDo;
    let arr = new Array();
    const elementToDo = document.createElement('li');
    if(!localStorage.getItem(YMD)){
        return arr;
    }
    if(localStorage.getItem(YMD).includes(',')){
        arrayToDo = localStorage.getItem(YMD).split(',');
        arrayToDo.forEach((value)=>{
            arr.push(value);
        });
    }
    else{
        arr.push(localStorage.getItem(YMD));
    }
    return arr;
}

function addToDoList(){
    if(input.value === ''){
        alert('please input you are going to do');
        return;
    }

    storeToDo = keepStore();
    storeToDo.push(input.value);
    
    const YMD = year+'-'+mon+'-'+DayOfChoice;
    localStorage.setItem(YMD,storeToDo);
    
    displayToDoOnDays();
    input.value="";
    input.focus();
}

add.addEventListener('click',(event)=>{
    addToDoList();
});

input.addEventListener('keypress',(event)=>{
    if(event.key==='Enter'){
       addToDoList();
    }
});

reset.addEventListener('click',()=>{
    const result = prompt(`Do you really want to reset TODO on ${year} ${mon} ${DayOfChoice}? Enter (y/n)`);
    const YMD = year+'-'+mon+'-'+DayOfChoice;
    if(result==='y'){
        localStorage.removeItem(YMD);
        displayToDoOnDays();
    }
});

allReset.addEventListener('click',()=>{
    const result = prompt(`Do you really want to clear all TODO? Enter (y/n) not recomended💥`);
    if(result==='y'){
        localStorage.clear();
        displayToDoOnDays();
    }
});

todoList.addEventListener('click',(event)=>{
    if(event.target.className==='far fa-minus-square'){
        console.log("a: "+event.target.parentNode.parentNode.textContent);
             
        const YMD = year+'-'+mon+'-'+DayOfChoice;
        
        if(localStorage.getItem(YMD).includes(',')){
            let array = localStorage.getItem(YMD).split(',');
            let copyArray = [];
            array.forEach((value)=>{
                if(value !== event.target.parentNode.parentNode.textContent){
                    copyArray.push(value);
                }
            });
            localStorage.setItem(YMD,copyArray);
        }
        else{
            localStorage.removeItem(YMD);
        }
        
        todoList.removeChild(event.target.parentNode.parentNode);
    }
}); 

main();