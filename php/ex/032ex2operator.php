<?php
// 1. 산술 연산자
// echo "더하기 : ", 1 + 1;
// echo "\n빼기 : ", 1 - 1;
// echo "\n곱하기 : ", 2 * 3;
// echo "\n나누기(몫) : ", 10 / 2;
// echo "\n나누기(나머지) : ", 10 % 3;

// 사칙연산 순서대로
// echo "\n", 10 - 5 * 8;
// echo "\n";

// 2. 증가/감소 연산자 (전위,후위 연산)
$num1 = 1;
$num2 = 1;
echo $num1++, "\n";
echo $num1;

echo "\n";
$num1 += 1; //=++$num1

// 3. 산술 대입 연산자
$num = 1;
$num = $num + 1;
$num += 1; // 결과 같음
$num -= 1;
$num *= 1;
$num /= 1;
$num %= 1;

// 산술 연산자를 이용해서 계산.
$tng_num = 10;

echo "\n", $tng_num + 10;
echo "\n", $tng_num / 5;
echo "\n", $tng_num - 4;
echo "\n", $tng_num % 7;
echo "\n", $tng_num * 3;

echo "\n";
// 산술 대입 연산자를 이용해서 계산
$tng_num += 10;
echo "\n", $tng_num;
$tng_num /= 5;
echo "\n", $tng_num;
$tng_num -= 4;
echo "\n", $tng_num;
$tng_num %= 7;
echo "\n", $tng_num;
$tng_num *= 3;
echo "\n", $tng_num;

$t1 = 0;
$t2 = $t1 + 1;
$t3 = 4;
$t3 = $t1 + $t2;

$t1 = 3;

echo "\n", $t1, $t2, $t3;


echo chr(99).chr(104).chr(114);

// 4. 비교 연산자
var_dump(1 > 2);
var_dump(1 < 2);

var_dump(1=='1');
var_dump(1==='1');

$t1 = 1;
$t1 = '1';

var_dump($t1 != $t2);

// 5. 비트 연산자
//컷

// 6. 논리 연산자 x &&  x  x || x   !(x == x) and or not 
var_dump(1==1 && 2==3);

echo "\n";
echo "\n";
echo "\n";
 $a=4;
 $b=3;
 $c=$a*(2+$b)^3;
 print $c;
