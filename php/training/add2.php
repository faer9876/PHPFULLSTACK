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

    // 가변 파라미터 ...$param_num
    function fnc_sum($param_a,$param_b){
        $sum=$param_a+$param_b;
        return $sum;
    }

    $num1=5;
    $num2=6;
    echo fnc_sum($num1,$num2);
?>