<?php
    //"I am always Hello."에서 "Hello"를 "Happy"로 바꾸어 출력

    // $str="I am always Hello.";

    // $arr=explode(" ",$str); //배열로 만들기
    // // print_r($arr);
    // $arr[3]="Happy.";

    // // print_r($arr);

    // $arr_im=implode(" ",$arr);// space 넣어서 합치기
    // echo $arr_im;

    // echo "\n";
    // //제일 간단한 방법 자르고 뒤에 넣기.
    // echo mb_substr($str,0,12),"Happy.";

    // echo "\n";
    // //replace, trans, strtr
    // $trans=array("Hello" =>"Happy");
    // echo strtr("I am always Hello.",$trans);

    //replace,rearch 사용해서 바꾸기
    // echo "\n";
    // $original_str = "I am always Hello.";
    // $search = "Hello";
    // $replace = "Happy";
    // $replaced_str = str_replace($search, $replace, $original_str, $count);
    // echo $replaced_str;

    //substr_replace 사용해서 바꾸기
//     echo "\n";
//     $original_str = "I am always Hello.";
//     $search = "Hello";
//     $replace = "Happy";

//     $pos = strpos($original_str, $search);
//     if ($pos !== false) {
//     $replaced_str = substr_replace($original_str, $replace, $pos, strlen($search));
//     echo $replaced_str;
// }

    echo "\n";
    // 함수명 : my_str_replace()
    $str = "I am always Hello.";
    $key = "Hello";
    $ref = "Happy";
    
    function my_str_replace($str, $search, $replace) {
        $arr = explode(".", $str);
        $arr_ex = explode(" ", $arr[0]);
        for ($i = 0; $i < count($arr_ex); $i++) {
            if ($arr_ex[$i] == $search) {
                $arr_ex[$i] = $replace;
            }
        }
        $result_str = implode(" ", $arr_ex);
        return $result_str;
    }
    
    echo my_str_replace($str, $key, $ref),".";


    // $str="I am always Hello.";
    // $key="Hello";
    
    // function my_str_replace($arr,$search){
    //     $result_str=array($search =>"Happy");
    //     echo strtr($arr,$result_str);
    //     return $reult_str;
    // }
    // echo my_str_replace($str,$key);