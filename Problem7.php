<?php
function removeSpecialChars($string)
{

    $specialChars = array('!', '@', '#', '$', '%', '^', '&', '*', '-', '_', '=', '+', '\\', '<', '>', '?', '/');

    $cleanString = str_replace($specialChars, '', $string);

    return $cleanString;
}

$string = "Hello world,! How& are$ you today? #awesome";
$cleanString = removeSpecialChars($string);
echo $cleanString;

?>