<?php
    //두 매개변수의 차를 구하는 함수를 구현

    // 두 매개변수를 나눈 함수를 구현

    // 두 매개 변수를 곱하는 함수를 구현
    
    function fun_min($a,$b){
        $a-=$b;
        return $a;
    }
    echo fun_min(4,2);
    echo"\n";

    function fun_div($c,$d){
        $c/=$d;
        return $c;
    }
    echo fun_div(10,3);
    echo"\n";

    function fun_mul($e,$f){
        $e*=$f;
        return $e;
    }
    echo fun_mul(4,3);

    //빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현
// 0  1  2
//10, 2, 5
function fnc_args_min(){
    $args = func_get_args();
    $sum = $args[0] * 2;
    // for($i=0;$i<count($args);$i++){
    //     $sum-=$args[$i];
    // }
    foreach($args as $val){
        $sum-=$val;
    }
    
    return $sum;
}

function fnc_args_mul(){
    $args2=func_get_args(); // 곱하기
    $sum2=1;
    foreach($args2 as $val){
        $sum2*=$val;
    }
    return $sum2;
}

function fnc_args_div(){ // 나누기
    $args3=func_get_args();     
    $sum3=$args3[0]*$args3[0];
    foreach($args3 as $val){   
        $sum3/=$val;
    }
    return $sum3;
}

echo fnc_args_min( 10,2,5);
echo "\n";
echo fnc_args_mul(4,2);
echo "\n";
echo fnc_args_div(8,2)
?>