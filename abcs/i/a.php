<?php

$X = (int) trim(fgets(STDIN));
$s = (string)$X;
$len = strlen($s);
if ($len >= 10) {
   echo substr($s,0,$len-1) . PHP_EOL;
   exit;
}
echo floor($X/10) . PHP_EOL;
