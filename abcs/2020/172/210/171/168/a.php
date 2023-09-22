<?php

$K = (int) fgets(STDIN);
$s = trim(fgets(STDIN));
$len = strlen($s);
if ($len <= $K) {
    echo $s . PHP_EOL;
} else {
    echo substr($s,0,$K) . '...' . PHP_EOL;
}
