<?php
function bubbleSort(&$arr)
{
    $n = sizeof($arr);

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {

            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

$arr = array(3, 7, 1, 2, 5);
$l = sizeof($arr);
bubbleSort($arr);

echo "Sorted array : \n";

for ($i = 0; $i < $l; $i++)
    echo $arr[$i] . " ";

?>