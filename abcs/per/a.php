<?php

$s = trim(fgets(STDIN));
// var_dump(isEachDiffs($s));
// var_dump(range('A','Z'));
if (isEachDiffs($s) && isLowers($s) && isUppers($s)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
function isEachDiffs($s) {
    $arr = str_split($s);
    $len = count($arr);
    $uniqArrLen = count(array_unique($arr));
    return $len === $uniqArrLen;
}
function isLowers($s) {
    $lowercases = range('a','z');
    $arr = str_split($s);
    foreach ($arr as $v) {
        if (in_array($v, $lowercases)) {
            return true;
        }
    }
    return false;
}
function isUppers($s) {
    $uppercases = range('A','Z');
    $arr = str_split($s);
    foreach ($arr as $v) {
        if (in_array($v, $uppercases)) {
            return true;
        }
    }
    return false;
}
