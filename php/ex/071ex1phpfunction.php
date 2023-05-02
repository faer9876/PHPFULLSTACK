<?php
    // echo decbin(10)."\n";
    // echo decoct(10)."\n";
    // echo acosh(10)."\n";
    // echo floor(4.9)."\n";
    // echo round(4.5)."\n";
    // echo ceil(4.1)."\n";
    // echo min(array(2,3,4))."\n";
    // echo max(array(2,3,4))."\n";
    // echo rand(3,4)."\n";

    //날짜 관련 함수
    // echo date('Y-m-d H:m:s');// 대소문자 구분 소문자y=년도 두자리 생략 소문자h 12시간기준
    // echo date('y-m-d H:m:s');// 
    // echo date('Y-m-d h:m:s');// 
    // echo date('Y-m-d H:m:s');// 
    // echo date('Y-M-d H:m:s');// 
    // echo date('Y-m-d H:m:s l');// 
    // echo date('Y-m-d H:m:s a');//

    //난수 함수
    // echo mt_rand(2,5);

    // echo PHP_OS,"\n";
    // echo PHP_VERSION_ID,"\n";
    // var_dump($GLOBALS);

    // define("INT_ONE",1); //상수선언 함수 명령규칙 모든 글자 대문자
    // echo INT_ONE;

    // $str_abcd="abcd";
    // echo strrev($str_abcd);

    //문자열 자르기
    // $str_1 = "가나다라마";
    // echo substr($str_1,3),"\n";
    // echo substr($str_1,2,1),"\n";
    // echo substr($str_1,3,2),"\n";
    // echo substr($str_1,-2);//음수일 경우 뒤에서 부터 자름 byte 수로 계산
    // echo mb_substr($str_1,-1); // 한글 자를 때 글자 수로 계산

    // $str_tng ="안녕하세요. PHP입니다.";
    // echo substr($str_tng,-13);

    // 세요, P만 출력
    // echo substr($str_tng,9,9),"\n";
    // echo mb_substr($str_tng,3,5);

    //문자열 빈공간 지우기
    // $str_trim = "         a       b     c          ";
    // echo trim($str_trim);
    // echo rtrim,ltrin 도 있다..


    //문자열의 길이를 구하는 함수
    // $str_len = "abcd";
    // echo mb_strlen($str_len);

    // 문자열 포맷에 따라 출력하는 함수
    // printf("안녕하세요. %s입니다","php");

    //define("WELCOME","안녕하세요. %s님.");

    // 기본 포맷 : error(숫자) : xxx error가 발생했습니다.
    // 에러 번호 : 에러 종류
        // 1 : 시스템
        // 2 : 로그인
        // 3 : 접속
    // $e1="시스템";
    // $e2="로그인";
    // $e3="접속";

    // printf("error(%d) %s error가 발생했습니다.",1,$e1);
    // echo "\n";
    // printf("error(%d) %s error가 발생했습니다.",2,$e2);
    // echo "\n";
    // printf("error(%d) %s error가 발생했습니다.",3,$e3);
    // echo "\n";

    // define("E","%s error가 발생했습니다.\n");
    // printf(E,"시스템");
    // printf(E,"로그임");
    // printf(E,"접속");

    // 문자열을 분리하는 함수
    // $str_sscanf="가나다라 50 abcd";
    // sscanf($str_sscanf,"%s %d %s", $str_ko, $int_d, $str_en);
    // echo $str_ko, "\n" ,$int_d, "\n", $str_en, "\n";

    // 문자열을 반복해서 찍어주는 함수
    // echo str_repeat("ed",3);

    //문자열을 특정문자열로 분리하는 함수 : explode()
    $str_expl = "홍길동,27세,남자,의적,조선";
    $arr_expl = explode(",", $str_expl);
    print_r($arr_expl);
    echo "\n";
    echo $arr_expl;

    // 배열을 특정 문자열로 합치는 함수 : implode()
    // $str_expl = "홍길동,27세,남자,의적,조선";
    // $arr_expl = explode(",", $str_expl);
    // $str_impl=implode("123",$arr_expl);
    // echo $str_impl;    
?>