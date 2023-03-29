<?php
    // function my_len($i){
    //     $count=-1;
    //     while(true){
    //         ++$count;
    //         // if($count == 5) {
    //         //     break;
    //         // }
    //         if(is_null($i[$count])){
    //             break; //false 을 준다고 무한루프 탈출 x
    //         }
    //     }
    //     return $count;
    // }

    // function my_len($i){
    //     $count=0;
    //     foreach($i as $val){
    //         $count++;
    //     }
    //     return $count;
    // }

    // function my_len2($d){
    //     $count=0;
    //     
    //     }
    //     while(true){
    //         try{
    //               if(is_null($d[$count])){
            //       throw new Exception("에러",1);
    //             if(is_null($d[$count])){
    //                 break;
    //             }   
    //             $count++;
    //     }catch(Exception $e){
    //         $s = $e->getMessage() . " (오류코드:" . $e->getCode() . ")";
    //         }
    // }
    //     return $count;
    // }

    // function arr($d){
    //     for($i=0;$i<=5;$i++){
    //         $d[$i]+=$d[$i];
    //     }
    // }
    

    // $i=array(1,2,3,4,5);
    // echo my_len($i);
    
    // echo "\n";

    // $d=array(1,2,3,4,5);
    // echo my_len2($d);


    $num_of_star = 4;
    $num_of_star2 = 3;

    // function mk_star($num){
    //     for($j=0;$j<$num;$j++){
    //             for($i=1;$i<=$num;$i++){
    //                 echo "*";
    //             }
    //             echo "\n";
    //         }
    //     }

    // for($d=0;$d<=$num_of_star;$d++){
    //     if($d===$num_of_star){
    //         echo mk_star($d);
    //     }
    // }

    function print_star($num){
        for($i=1;$i<=$num;$i++){
            echo "*";
        }
    }
    function show_star($num){
        for($k=0;$k<=$num;$k++){
            echo print_star($k);
            echo "\n";
        }
    }
    function show_star2($num){
        for($k=0;$k<$num;$k++){
            echo print_star($num)."\n";
        }
    }

echo show_star($num_of_star);
echo show_star2($num_of_star);
?>
