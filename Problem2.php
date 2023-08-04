<?php
$m=1;
for($i=9;$i>=1;$i-=2){
    for($k=0;$k<$m;$k++){
        echo " ";
    }
    $m++;
    for($j=0;$j< $i;$j++){
        echo "*";
    }
    echo "\n";
}
$m-=2;
for($i=3;$i<=9;$i+=2){
    for($k=0;$k<$m;$k++){
        echo " ";
    }
    $m--;
    for($j=0;$j< $i;$j++){
        echo "*";
    }
    echo "\n";
}
?>