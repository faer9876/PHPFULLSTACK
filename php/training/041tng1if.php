<?php
//성적, 범위: 100 a+ 90~99a 80~90 b 70~80 c d f
echo "성적 : ";
echo "\n";
$rgrad = 100;
$grad = $rgrad;
$mem = "당신의 점수는";
$com = "점 입니다.";
$err = "error";
$ap = "<Ap>";
$a = "<A>";
$b = "<B>";
$c = "<C>";
$d = "<D>";
$f = "<F>";

if ($rgrad > 100 || $rgard < 0) {
    echo $err;
} else {
    if ($rgrad) {
        if ($rgrad === 100) {
            $grad = $ap;
        } else if ($rgrad < 100) {
            $grad = $a;
        } else if ($rgrad < 90) {
            $grad = $b;
        } else if ($rgrad < 80) {
            $grad = $c;
        } else if ($rgrad < 70) {
            $grad = $d;
        } else if ($rgrad < 60) {
            $grad = $f;
        }
        echo $mem . $rgrad . $com . $grad;
    }
}
