<?php

$string = trim(fgets(STDIN));
$target = ['A','C','G','T'];
$results = [];
$cnt = 0;
for ($i = 0,$len = strlen($string); $i < $len; $i++) {
    if (in_array($string[$i], $target)) {
        $cnt++;
    } else {
        $results[] = $cnt;
        $cnt = 0;
    }
}
$results[] = $cnt;
echo max($results) . PHP_EOL;
