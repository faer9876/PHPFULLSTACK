<?php
    // 1.while 문
    $i=1;
    $num=2;
    $max_dan=9;
    while($num<=$max_dan){
        echo $num."단\n";
        $i=1;
            while($i<=$max_dan){
                $result = $num." * ".$i." = ".$i*$num."\n";
                echo $result;
                $i++;
            }
        echo "\n";
        $num++;
    }
?>