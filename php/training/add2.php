<?php
    // $arr=array(
    //     1
    //     ,2
    //     ,array(
    //         "info_a"=>3
    //         ,"info_b"=>4
    //         ,"info_arr"=>
    //         array(
    //             "f_1"=>5
    //             ,"f_2"=>7
    //         )
    //     )
    //         );

    // echo $arr["info"]["info_a"];
    // echo "\n";
    // echo $arr["info"]["info_arr"]["f_2"];
    // echo "\n";
    // echo $arr[2]["info_arr"]["f_1"];
    // echo $arr[2][1];

    //함수
    //함수명 : fnc_sum
    // 기능 파라미터 더한 값을 리턴
    //파라미터 :int $param_a
    //         int $param_b
    //리턴 : int $sum

    // 가변 파라미터 ...$param_numbers
    // function fnc_sum($param_a,$param_b){
    //     $sum=$param_a+$param_b;
    //     return $sum;
    // }
    // // return array_sum($param_numbers);
    // $num1=5;
    // $num2=6;
    // echo fnc_sum($num1,$num2);

    //글로벌 변수
    // function fnc_global(){
    //     global $global_i;
    //     $global_i=0;
    // }
    // fnc_global();
    // $global_i=5;

    // echo $global_i;

    //static 변수
    // function fnc_static(){
    //     static $static_i =0;
    //     echo $static_i;
    //     $static_i++;
    // }
    
    // fnc_static();

    // function fnc_reference(&$param_str){
    //     $param_str = "fnc_reference";
    // }
    // $str = "aaa";
    // fnc_reference($str);
    // echo $str

    // function fnc_mul($i){
    //     for($x=1;$x<=9;$x++){
    //         echo "$i x $x = ", $i * $x,"\n";
    //     }
    // }

    // $n=3;
    // echo $n."단 =\n";
    // fnc_mul($n);

    //*
    //** 
    //***
    //****
    //*****
    //함수를 하나 만들고, 호출하여 별찍기




    /************************
    파일명 :            
    시스템명 :
    이력
        v001 : new  - kim
        v002 : (무엇을 바꿨는지)
    *************************/
    // function make_star($s){ v002 파라미터 추가
    function make_star($s,$d="?"){
        for($i=1;$i<=$s;$i++){
            // echo "*"; v002 별 기록 수정
            echo $d;
        }
        echo "\n";
    }

    // function make_str($param_str="*"); // 파라미터를 제어하는 다른 기술 없을 시에 위에 것으로 대체

    make_star(3);
    make_star(2,"ㄱ");
    make_star(1,"ㄱ");
    
    // 위 함수를 내가 원하는 문자로 찍고 싶다는 요청이 왔습니다.

    // make_star(3);
    // make_star(1);
    // make_star(2);
    // make_star(1);

    // function print_star($d){
    //     for($j=1;$j<=$d;$j++){
    //         echo make_star($j);
    //     }
    // }

    // $num=5;
    // print_star($num);

?>