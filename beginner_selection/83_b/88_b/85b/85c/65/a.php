<?php

$string = trim(fgets(STDIN));
$subs = ['dream', 'dreamer', 'erase', 'eraser'];

$stringReverse = strrev($string);
$subsReverse = [];
foreach ($subs as $s) {
    $subsReverse[] = strrev($s);
}
$pattern = '/^(' . $subsReverse[0] . '|' . $subsReverse[1] . '|' . $subsReverse[2] . '|' . $subsReverse[3] . ')*$/';
// var_dump($pattern);
if (isOK($pattern,$stringReverse)) {
    echo "YES" . PHP_EOL;
} else {
    echo "NO" . PHP_EOL;
}
function isOK($pattern, $s) {
    return preg_match($pattern, $s) === 1;
}
