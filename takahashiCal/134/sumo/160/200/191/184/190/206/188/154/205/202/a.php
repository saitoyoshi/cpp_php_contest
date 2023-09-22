<?php

$s = trim(fgets(STDIN));
$t = '';
$len = strlen($s);
for ($i = 0; $i < $len; $i++) {
    $t .= $s[$len-1-$i];
}
for ($i = 0; $i < $len; $i++) {
    if ($t[$i] === '6') {
        $t[$i] = '9';
    } elseif ($t[$i] === '9') {
        $t[$i] = '6';
    }
}
echo $t . PHP_EOL;
