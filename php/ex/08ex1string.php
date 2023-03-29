<?php
    $str_1="aaa";
    $str_2="bbb";
    $str_3=$str_1.$str_2;
    echo $str_3;

    //대소문자 변환
    $str_en="abdc dfgh";
    echo strtolower($srt_en),"\n";

    //대문자 변환
    echo strtoupper($str_en),"\n";

    //맨 앞 글자만 대문자로 변환
    echo ucfirst($str_en),"\n";

    //각 단어의 맨 앞글자만 대문자로 변환
    echo ucwords($str_en),"\n";

    //url 관련함수
    $url = "http://www.naver.com";

    $arr_url = parse_url($url);
    var_dump($arr_url);

    parse_str($arr_url["query"],$arr_parse);

    var_dump();
?>