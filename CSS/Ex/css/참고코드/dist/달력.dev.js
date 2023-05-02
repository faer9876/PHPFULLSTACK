"use strict";

// 함수 생성자 선언
var Day = document.querySelector('.day');
var month = document.querySelector('.month-name');
var date = new Date();
var pre = document.querySelector('.left');
var next = document.querySelector('.right');
var todoField = document.querySelector('.todo');
var todoTitle = document.querySelector('.todo-title');
var todoList = document.querySelector('.todoList');
var input = document.querySelector('input[type="text"]');
var add = document.querySelector('.add');
var reset = document.querySelector('.reset');
var allReset = document.querySelector('.allreset'); // 함수 받기 현재 년,달,일

var currentMon = date.getMonth() + 1;
var currentYear = date.getFullYear();
var currentDay = date.getDate();
var DayOfChoice = currentDay;
var MonOfChoice = currentMon;
var yearOfChoice = currentYear;
var year = currentYear;
var mon = currentMon;
var clickEventArr = [];
var storeToDo = []; // 윤년인지 확인

function isLeapYear(year) {
  return year % 4 == 0 && (year % 400 == 0 || year % 100 != 0);
} // 홀수달 31일,짝수 30일 윤년 29일


function getDayOfMon(mon, year) {
  if (mon === 1 || mon === 3 || mon === 5 || mon === 7 || mon === 8 || mon === 10 || mon === 12) {
    return 31;
  } else if (mon === 2) {
    return isLeapYear(year) ? 29 : 28;
  } else {
    return 30;
  }
} // 몇년 몇월 몇일인지 구하기


function getDay(year, mon, date) {
  var conYMD = year + '-' + mon + '-' + date;
  return new Date(conYMD).getDay();
} // list형태로 달력 작성


function makeCalendar(year, mon, dayCount) {
  clickEventArr = [];
  Day.innerHTML = '';
  var getFirstDay = getDay(year, mon, 1); // 전달 입력받음 입력한 달이 0 미만이면 12 받음

  var previousMon;

  if (currentMon - 1 < 0) {
    previousMon = 12;
  } // 0미만이 아니면 현재 달에서 1빼기
  else {
      previousMon = currentMon - 1;
    }

  var getDayOfPreMon = getDayOfMon(previousMon, year);

  for (var i = (getFirstDay + 6) % 7; i > 0; i--) {
    var listPre = document.createElement('li');
    listPre.textContent = "".concat(getDayOfPreMon - (i - 1));
    listPre.style.opacity = '0.5';
    listPre.classList.add('disabled');
    Day.appendChild(listPre);
  }

  var _loop = function _loop(_i) {
    if (_i === currentDay && year === currentYear && mon === currentMon) {
      //선택한 년, 월, 일 다를 때 현재 날짜에 검은색 테두리
      var onlyOneList = document.createElement('li');
      onlyOneList.textContent = "".concat(_i);

      if (currentYear === yearOfChoice && currentMon === MonOfChoice && currentDay === DayOfChoice) {
        onlyOneList.style.border = '3px solid red';
      } else {
        onlyOneList.style.border = '3px solid black';
      }

      if (0 === getDay(year, mon, _i)) {
        onlyOneList.style.color = 'red';
      } else if (6 == getDay(year, mon, _i)) {
        onlyOneList.style.color = 'blue';
      } //현재 년, 월 같을 때 즉 오늘 일때 박스 검은색으로 표시


      Day.addEventListener('click', function (event) {
        if (event.target !== onlyOneList) {
          onlyOneList.style.border = '3px solid black';
        }
      });
      Day.appendChild(onlyOneList);
      return "continue";
    } // 현재 일수 다를때 선택하면 빨간색 표시


    var list = document.createElement('li');
    list.textContent = "".concat(_i);

    if (_i === DayOfChoice && year === yearOfChoice && mon === MonOfChoice) {
      list.style.border = '3px solid red';
      Day.addEventListener('click', function (event) {
        if (event.target !== list) {
          list.style.border = 'none';
        }
      });
    } // 토요일6 파란색, 일요일0 빨간색 설정


    if (0 === getDay(year, mon, _i)) {
      list.style.color = 'red';
    } else if (6 == getDay(year, mon, _i)) {
      list.style.color = 'blue';
    }

    Day.appendChild(list);
  };

  for (var _i = 1; _i <= dayCount; _i++) {
    var _ret = _loop(_i);

    if (_ret === "continue") continue;
  }
}

function setMonthTitle(year, mon) {
  month.textContent = "".concat(year, ".").concat(mon);
} // 선택 달이 12가 넘어가면 year+1하고 mon 1로 초기화


function nextMonthOrYear() {
  if (mon === 12) {
    year = year + 1;
    mon = 1;
  } // 12 안넘으면 mon+1
  else {
      mon = mon + 1;
    }

  setMonthTitle(year, mon);
  makeCalendar(year, mon, getDayOfMon(mon, year));
} // 전년도 표현하기


function preMonthOrYear() {
  if (mon === 1) {
    year = year - 1;
    mon = 12;
  } else {
    mon = mon - 1;
  }

  setMonthTitle(year, mon);
  makeCalendar(year, mon, getDayOfMon(mon, year));
} // 텍스트로 입력받고 현재일 입력받기


function main() {
  setMonthTitle(year, mon);
  makeCalendar(year, mon, getDayOfMon(mon, year));
  todoTitle.textContent = "What are you going to do on ".concat(year, ".").concat(mon, ".").concat(currentDay, " \uD83D\uDC40\u2049");
  displayToDoOnDays();
}

function displayToDoOnDays() {
  todoList.innerHTML = '';
  var YMD = year + '-' + mon + '-' + DayOfChoice;
  var arrayToDo;
  var elementToDo = document.createElement('li');

  if (!localStorage.getItem(YMD)) {
    return;
  }

  if (localStorage.getItem(YMD).includes(',')) {
    arrayToDo = localStorage.getItem(YMD).split(',');
    arrayToDo.forEach(function (value) {
      var deleteBtn = document.createElement('button');
      deleteBtn.setAttribute('class', 'deleteBtn');
      deleteBtn.innerHTML = '<i class="far fa-minus-square"></i>';
      var elementToDo = document.createElement('li');
      elementToDo.innerText = value;
      elementToDo.appendChild(deleteBtn);
      elementToDo.scrollTo();
      todoList.appendChild(elementToDo);
    });
  } else {
    var deleteBtn = document.createElement('button');
    deleteBtn.setAttribute('class', 'deleteBtn');
    deleteBtn.innerHTML = '<i class="far fa-minus-square"></i>';
    elementToDo.textContent = localStorage.getItem(YMD);
    elementToDo.appendChild(deleteBtn);
    todoList.appendChild(elementToDo);
  }
}

pre.addEventListener('click', preMonthOrYear);
next.addEventListener('click', nextMonthOrYear);

function clearEvent() {
  clickEventArr.forEach(function (value) {
    value.style.border = 'none';
  });
}

Day.addEventListener('click', function (event) {
  if (event.target.tagName === 'UL') return;

  if (event.target.className !== 'disabled') {
    clearEvent();
    todoTitle.textContent = "What are you going to do on ".concat(year, ".").concat(mon, ".").concat(event.target.textContent, " \uD83D\uDC40\u2049");
    event.target.style.border = '3px solid red';
    DayOfChoice = event.target.textContent * 1;
    MonOfChoice = mon;
    yearOfChoice = year;
    displayToDoOnDays();
    clickEventArr.push(event.target);
    console.log(clickEventArr);
    input.focus();
  }
});

function keepStore() {
  var YMD = year + '-' + mon + '-' + DayOfChoice;
  var arrayToDo;
  var arr = new Array();
  var elementToDo = document.createElement('li');

  if (!localStorage.getItem(YMD)) {
    return arr;
  }

  if (localStorage.getItem(YMD).includes(',')) {
    arrayToDo = localStorage.getItem(YMD).split(',');
    arrayToDo.forEach(function (value) {
      arr.push(value);
    });
  } else {
    arr.push(localStorage.getItem(YMD));
  }

  return arr;
}

function addToDoList() {
  if (input.value === '') {
    alert('please input you are going to do');
    return;
  }

  storeToDo = keepStore();
  storeToDo.push(input.value);
  var YMD = year + '-' + mon + '-' + DayOfChoice;
  localStorage.setItem(YMD, storeToDo);
  displayToDoOnDays();
  input.value = "";
  input.focus();
}

add.addEventListener('click', function (event) {
  addToDoList();
});
input.addEventListener('keypress', function (event) {
  if (event.key === 'Enter') {
    addToDoList();
  }
});
reset.addEventListener('click', function () {
  var result = prompt("Do you really want to reset TODO on ".concat(year, " ").concat(mon, " ").concat(DayOfChoice, "? Enter (y/n)"));
  var YMD = year + '-' + mon + '-' + DayOfChoice;

  if (result === 'y') {
    localStorage.removeItem(YMD);
    displayToDoOnDays();
  }
});
allReset.addEventListener('click', function () {
  var result = prompt("Do you really want to clear all TODO? Enter (y/n) not recomended\uD83D\uDCA5");

  if (result === 'y') {
    localStorage.clear();
    displayToDoOnDays();
  }
});
todoList.addEventListener('click', function (event) {
  if (event.target.className === 'far fa-minus-square') {
    console.log("a: " + event.target.parentNode.parentNode.textContent);
    var YMD = year + '-' + mon + '-' + DayOfChoice;

    if (localStorage.getItem(YMD).includes(',')) {
      var array = localStorage.getItem(YMD).split(',');
      var copyArray = [];
      array.forEach(function (value) {
        if (value !== event.target.parentNode.parentNode.textContent) {
          copyArray.push(value);
        }
      });
      localStorage.setItem(YMD, copyArray);
    } else {
      localStorage.removeItem(YMD);
    }

    todoList.removeChild(event.target.parentNode.parentNode);
  }
});
main();