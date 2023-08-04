<?php
$sequence = '1-2_3#4_5-6#7-8_9#10';
$sequence = trim($sequence, '-_#');
$numbers = preg_split('/[-_#]/', $sequence);
foreach ($numbers as $number) {
    echo $number;
}
?>