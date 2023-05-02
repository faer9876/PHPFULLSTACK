<?php
    //파일명: gugudan.txt
    //내용은 아래와 같습니다.
    //2단
    //2 * 1 = 2
    //....

    // $gugudan = fopen("../ex/sam/gugudan.txt","w");




    // for($i=2; $i<=9; $i++){
    //     $out = "$i 단\n"; 
    //     for($j=1; $j<=9; $j++){
    //         $mul = $i * $j;
    //         $out .= "$i * $j = $mul\n";
    //     }
    //     fputs($gugudan, $out); 
    // }
    // fclose($gugudan);

    // function gugugu($n){
    //     $out="";
    //     for($i=2; $i<=$n; $i++){
    //         $out .= "$i 단\n"; 
    //         for($j=1; $j<=$n; $j++){
    //             $mul = $i * $j;
    //             $out .= "$i * $j = $mul\n";
    //         }
    //     }
    //     return $out;
    // }
    // fputs($gugudan,gugugu(9));




    // function write_gugudan_to_file($gugudan) {
    //     $gugudan = fopen($gugudan, "w");
    //     for($i=2; $i<=9; $i++){
    //         $out = "$i 단\n"; 
    //         for($j=1; $j<=9; $j++){
    //             $mul = $i * $j;
    //             $out .= "$i * $j = $mul\n";
    //         }
    //         fputs($gugudan, $out); 
    //     }
    //     fclose($gugudan);
    // }

    // write_gugudan_to_file(9);

    // function g($n){
    //     $out="";
    //     for($i=2;$i<$n;$i++){
    //         $out = $out."$i 단\n";
    //         for($j=2;$j<$n;$j++){
    //             $mul=$i*$j;
    //             $out=$out."$i * $j = $mul\n";
    //         }
    //     }

    //     return $out;
    // }
    // fputs($gugudan,g(10));
    // fclose($gugudan);

    // $food = fopen("../ex/sam/food.txt","w");

    // $arr_food=array();
    // $i=0;
    // function get_food($arr_food){
    //     while(!feof($f_food)){
    //         $arr_food[$i] = fgets($f_food);
    //         $i++;
    //     }
    // }
    $temp = 'new array';
    $food = fopen("../ex/sam/food.txt","a");
    $get = file("../ex/sam/food.txt");

    // $get[8]=$temp;
    // for($i=count($get);$i>4;$i--){ 
    //     $get[$i]=$get[$i-1];
    //     $get[4]="스테이크";
    //     return $get[$i];
    // }

    $get[8] = $temp;
    $get[8] = $get[7];
    $get[7] = $get[6];
    $get[6] = $get[5];
    $get[5] = $get[4];
    $get[4] = "스테이크\n";
    $g_get=implode("",$get);
    fputs($food,$g_get);
    pclose($food);


    // $file_path = '../ex/sam/food.txt';
    // $file_contents = file_get_contents($food);

    // $insert_index = 4; 
    // $insert_value = '스테이크'; 
    // $file_contents = substr_replace($file_contents, $insert_value, $insert_index, 0);
    // file_put_contents($food, $file_contents);


    // $key="국밥";
    // $temp;
    // function fnc_rep_food($num){
    //     for($j=0;$j<count($arr);$j++){
    //         if($arr_food[$j]=="국밥"){
    //             $arr_food[$j]=$arr_food[$j+1];

    //         }
    //     }
    // }
?>