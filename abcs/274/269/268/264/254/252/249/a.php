<?php

function isEachDifferent($letters) {
    $new = array_unique($letters);
    return count($letters) === count($new);
}
function isContainUppercase($letters) {
    $uppercases = range('A','Z');
    foreach ($uppercases as $letter) {
        if (in_array($letter, $letters)) {
            return true;
        }
    }
    return false;
}
function isContainLowercase($letters) {
    $lowercases = range('a','z');
    foreach ($lowercases as $letter) {
        if (in_array($letter, $letters)) {
            return true;
        }
    }
    return false;
}
$s = trim(fgets(STDIN));
$letters = str_split($s);

if (isContainLowercase($letters) && isContainUppercase($letters) && isEachDifferent($letters)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
