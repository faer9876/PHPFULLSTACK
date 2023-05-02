<?php
    $arr = array("abc","dfg");
    $str = $arr[1];

    if(strpos($str,"a")!==false){
        echo "포함";
    }else{
        echo "없음";
    }

    // for($i=0;$i<count($arr);$i++){
    //     echo $i." > ";
    //     echo $arr[$i]."\n";
    // }
    
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



    // function my_max($array){
    //     $max=$array[0];
    //     for($i=1;$i<count($array);$i++){
    //         if($max<$array[$i]){
    //             $max=$array[$i];
    //         }
    //     }
    //     return $max;
    // }
    
    // function my_min($array){
    //     $min=$array[0];
    //     for($d=1;$d<count($array);$d++){
    //         if($min>$array[$d]){
    //             $min=$array[$d];
    //         }
    //     }
    //     return $min;
    // }

    // echo my_max($arr);
    // echo my_min($arr);
    
?>