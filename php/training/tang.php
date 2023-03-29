<?php
    $arr = array(5,10,7,3,1);
    $num = count($arr);

    // for($i=0;$i<count($arr);$i++){
    //     echo $i." > ";
    //     echo $arr[$i]."\n";
    // }
    //
    // $num=count($arr);
    // $temp=0;
    // for($i=0;$i<$num-1;$i++){
    //     for($j=$i+1;$j<$num;$j++){
    //         if($arr[$i]>$arr[$j]){
    //             $temp=$arr[$j];
    //             $arr[$j]=$arr[$i];
    //             $arr[$i]=$temp;
    //         }
    //     }
    //     echo $arr[$i].".";
    // }



    function my_max($array){
        $max=$array[0];
        for($i=1;$i<count($array);$i++){
            if($max<$array[$i]){
                $max=$array[$i];
            }
        }
        return $max;
    }
    
    function my_min($array){
        $min=$array[0];
        for($d=1;$d<count($array);$d++){
            if($min>$array[$d]){
                $min=$array[$d];
            }
        }
        return $min;
    }

    echo my_max($arr);
    echo my_min($arr);
    
?>