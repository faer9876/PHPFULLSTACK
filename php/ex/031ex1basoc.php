<?php

    // 네이밍 기법
    //  1. 카멜 기법 : 낙타의 등을 연상하고, 단어의 첫글자는 대문자, 나머지는 소문자로 작성
    //      예) $TestNum;
    //  2. 스네이크 기법 : 뱀을 연상, 단어와 단어 사이를 "_"로 이어주고 전부 소문자로 작성
    //      예) $test_num;


    print "안녕하세요.\n";
    print ("안녕하세요. 괄호입니다.\n");
    echo "안녕하세요. 에코입니다.\n";

    var_dump(print "안녕.");

    $test_num = 1; // 변수명 특수문자 숫자x _는 가능
    echo $test_num;  //print=return echo=void

?>