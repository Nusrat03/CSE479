<?php
$color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');
foreach ($color as $key => $value)
{   
    $color[$key]=strtoupper($value);
}
print_r($color);
foreach ($color as $key => $value)
{   
    $color[$key]=strtolower($value);
}
print_r($color);
?>