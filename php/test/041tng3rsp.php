<?php
$user;
$user = 1;
echo "내 값은 = " ,$user,"\n";
$com = rand(0, 2);
echo "컴퓨터의 값은 = ",$com;
$print1 = "컴퓨터 승";
$print2 = "유저 승";
$print3 = "비김";
$err = "error";
$result;
// 0은 가위 1은 바위 2는 보   
if($user<0 || $user>=3){
    $result= $err;
} 
    else{
        if ($user == 0 && $com == 1) {
            $result=$print1;
        } else if ($user == 0 && $com == 2) {
            $result=$print2;
        } else if ($user == 1 && $com == 2) {
            $result=$print1;
        }else if($user ==1 && $com == 0){
            $result=$print2;
        }
        else if ($user == 2 && $com == 1) {
            $result=$print2;
        } else if ($user == 2 && $com == 0) {
            $result=$print1;
        } else {
            $result=$print3;
        }
    }
echo "\n",$result;
