<?php
$text = 'The quick brown [dog].';
preg_match('#\[(.*?)\]#', $text, $match);
print $match[1]."\n";
?>