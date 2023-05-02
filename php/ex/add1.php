<?php
    // for ($i=2; $i<=9 ; $i++) {
    //     echo "$i 단\n";
    //     for ($x=1; $x<=9 ; $x++){ 
    //         echo "$i x $x =", $i * $x,"\n";
    //     }
    // }

    //1~100숫자 중에 짝수의 합
function fnc_add($ii){    
    $result=0;
    for($i=1;$i<=$ii;$i++){
        $result += 2*$i;
    }   
    return $result;
}

$num=50;
echo fnc_add($num);   
?>