<?php
    //로또
$arr=array();
    function get_array($array){
        for($p=0;$p<6;$p++){
            $array[$p]=rand(1,45);
        }
        for($i=0;$i<6;$i++){ //i 0부터 시작
            for($j=1;$j<6;$j++){ // j=1부터 시작
                if($i!=$j && $array[$i]==$array[$j]){ //i,j가 다를때만
                    $array[$j]==rand(1,45);
                }
            }
            echo $array[$i]."\n";
        }
    }
    get_array($arr);
?>