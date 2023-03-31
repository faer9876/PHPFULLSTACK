<?php
    //로또
// $arr=array();
//     function get_array($array){
//         for($p=0;$p<6;$p++){
//             $array[$p]=rand(1,45);
//         }
//         for($i=0;$i<6;$i++){ //i 0부터 시작
//             for($j=1;$j<6;$j++){ // j=1부터 시작
//                 if($i!=$j && $array[$i]==$array[$j]){ //i,j가 다를때만
//                     $array[$j]==rand(1,45);// 중복 수가 있을 때 그 배열에 랜덤값 다시 적용
//                         $array[$j]=rand(1,45);
//                     }
//                 }    
//             }
//         }
//         echo $array[$i]."\n";
//     }
//     get_array($arr);


function get_array(){
    $array = array();
    $i = 0;
    while ($i < 6) {
        
        $num = rand(1,45);
        if (!in_array($num, $array)) {
            $array[] = $num;
            $i++;
        }
    }
    return $array;
}
print_r(get_array());
?>