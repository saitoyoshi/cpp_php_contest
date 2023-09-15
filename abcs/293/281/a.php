<?php

$s = trim(fgets(STDIN));
$head = substr($s,0,1);
$middle = substr($s,1,6);
$tail = substr($s,-1,1);

if (isUpper($head) && isUpper($tail) && isOK($middle)) {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
function isUpper($letter) {
    $uppercases = range('A','Z');
    return in_array($letter, $uppercases);
}
function isOk($numstr) {
    $n = (int)$numstr;
    return 100000 <= $n && $n <= 999999;
}
