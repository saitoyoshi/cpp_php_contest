<?php

$string = trim(fgets(STDIN));
$subs = ['dream', 'dreamer', 'erase', 'eraser'];

$stringReverse = strrev($string);
$subsReverse = [];
foreach ($subs as $s) {
    $subsReverse[] = strrev($s);
}
$flag = false;
while (strlen($stringReverse) !== 0) {
    $s1 = substr($stringReverse, 0,5);
    if ($s1 === $subsReverse[0] || $s1 === $subsReverse[2]) {
        $flag = true;
        $stringReverse = substr($stringReverse, 5);
    } else {
        $s2 = substr($stringReverse, 0,6);
        if ($s2 === $subsReverse[1] || $s2 === $subsReverse[3]) {
            $flag = true;
            $stringReverse = substr($stringReverse, 6);
        } else {
            $flag = false;
        }
    }
    if (!$flag) {
        echo "NO" . PHP_EOL;
        exit;
    }
}
echo "YES" . PHP_EOL;
