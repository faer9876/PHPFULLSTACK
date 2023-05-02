<?php
// 1.if의 기본형태
$num = 4;

if ($num === 0) {
    //참 일 경우 내부 실행
    echo '0입니다';
} else if ($num === 1) {
    echo '1입니다';
} else if ($num === 2) {
    echo '2입니다';
} else if ($num === 3) {
    echo '3입니다';
}else{
    echo $num,"입니다";
}
