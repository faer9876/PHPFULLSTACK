<?php
echo "성적 : ";
echo "\n";
$val = 0;
$grad = $val;
$mem = "당신의 점수는";
$com = "점 입니다.";
$err = "error";
$ap = "Ap";
$a = "A";
$b = "B";
$c = "C";
$d = "D";
$f = "F";

$show = $mem . $val . $com;
$op = "<";
$clo = ">";
$score = $op . $clo;

if($var===0){
    echo $err;
}

switch ($val) {
    case $val === 100:
        echo $show . $ap;
        break;

    case $val >= 90:
        echo $show . $a;
        break;

    case $val >= 80:
        echo $show . $b;
        break;

    case $val >= 70:
        echo $show . $c;
        break;

    case $val >= 60:
        echo $show . $d;
        break;

    case $val >= 0:
        echo $show . $f;
        break;


    default:
        echo $err;
        break;
}
