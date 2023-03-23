<?php

    // 반복문을 이용해서 출력 * ** *** **** *****
    $d=4;

  /*  for($i=1;$i<=$d;$i++){ 
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "\n";
    } */
    
    // 뒤집기
    /* for($k=$d;$k>=1;$k--){
        for($p=1;$p<=$k;$p++){
            echo "*";
        }
        echo "\n";
    } */

    // 오른쪽 정렬
   /* for($i=1;$i<=$d;$i++){ 
        for($k=0;$k<=$d-$i;$k++){
            echo " ";
        }
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "\n";
    } */

    //피라미드
    for($i=1;$i<=$d;$i++){ 
        for($k=0;$k<=$d-$i;$k++){
            echo " ";
        }
        for($j=1;$j<=$i*2-1 ;$j++){
            echo "*";
        }
        echo "\n";
    }

    //피라미드 뒤집기
 /*   for($i=$d;$i>=0;$i--){ 
        for($k=0;$k<=$d-$i;$k++){
            echo " ";
        }
        for($j=$i*2-1;$j>=1;$j--){
            echo "*";
        }
        echo "\n";
    } */
 
?>