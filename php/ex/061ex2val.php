<?php
    // function fnc_add($int_a){
    //     global $global_int_a;
    //     $int_a = $int_a+10;
    //     return $int_a;
    // }
    // $global_int_a=10;// 전역변수 값 대입
    // echo fnc_add($global_int_a);

    // function fnc_add_1(){
    //     static $i=1;
    //     echo $i."\n";
    //     $i++;
    // }
    // //& 주소값
    // for($i=0;$i<3;$i++){
    //     fnc_add_1();// 1 표시하고 2로 초기화 내려가서 2인데 1로 출력하고 2로 바뀜 다시 1로 출력 2초기화
    // }              // 1, 1, 1


    //call by value
    // function fnc_val($int_a,$int_b){
    //     $sum=$int_a + $int_b;
    //     $int_a=3;
    //     $int_b=4;        
    // }

    // $int_a=1;
    // $int_b=2;
    // fnc_val($int_a,$int_b);
    // echo $int_a," ",$int_b;// 1 2

    // call by reference
    function fnc_val(&$a,&$b){
        $a=3;
        $b=4;
    }
    
    $int_a=1;
    $int_b=2;
    fnc_val($int_a,$int_b);
    echo $int_a," ",$int_b;


?>