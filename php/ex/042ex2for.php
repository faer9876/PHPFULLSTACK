<?php
for($j=2;$j<10;$j++){
    echo $j."단\n";
    for ($i=1; $i < 10; $i++) { 
        $result=$i." * ".$j." = ".$i*$j;
        echo $result."\n";
    }
    echo "\n"; 
}
?>