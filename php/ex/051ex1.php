<?php
    //중복되지 않는 원소를 반환array_diff()
    $arr_diff_1 = array("a","b","c");
    $arr_diff_2 = array("a","b","d");
    /*
    $arr_diff = array_diff($arr_diff_1 , $arr_diff_2);
    print_r($arr_diff);
    */


    //배열의 정렬 asrot, arsort, ksort, krsort
    /*
    $arr_num1=array(1,3,5,2);
    $arr_so=asort($arr_num1);
    print_r($arr_num1); //오름차순 정렬

    $arr_num2=array("b","a","d","c");
    $arr_so=arsort($arr_num2);
    print_r($arr_num2);// 내림차순 정렬
    */

    /*
    $arr["php"]="ksort 예제1";
    $arr["ksort"]="ksort 예제2";
    $arr["array"]="ksort 예제3";

    ksort($arr);

    print_r($arr);
    */

    /*
    $arr=array("key1"=> "key1","key3"=> "key3",
                "key4"=> "key4","key2"=> "key2");
    krsort($arr);
    print_r($arr);
    */

    //foreach($array as $val){}
    
    $arr1 = array("key1"=>"val1",
                    "key3"=>"val3",
                    "key4"=>"val4",
                    "key2"=>"val2");
    /*
                    foreach($arr1 as $key=> $val){ //key(컬럼명)와 val(실제 데이터 값)은 임의의 변수
        echo $key." : ".$val."\n";
        
    }
    */

    //val 값만 가져오기
    /*
    foreach($arr1 as $val){
        echo $val."\n";
    }
    */


    //foreach문을 사용해서 키가 삭제인 요소 제거 삭제 이외는 키:값 포맷으로 출력
    $arr_ass =array(
        "된장짜개" => "파"
        ,"볶음밥" => "양파"
        ,"삭제" => "값값"
        ,"김치" => "마늘"
        ,"비빔밥" => "참기름"
    );

    foreach($arr_ass as $key=> $val){
        if($val=="값값"){
            unset($arr_ass["삭제"]);
        }else{
        echo $key.":".$val."\n";}
    }
    var_dump($arr_ass);
?>