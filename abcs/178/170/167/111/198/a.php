<?php

$N = (string) trim(fgets(STDIN));
$s = removeTrailingZeros($N);
if (isKaibun($s)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;

}

function removeTrailingZeros($str) {
    return preg_replace('/0+$/','',$str);
}
function isKaibun($s) {
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] !== $s[strlen($s)-1-$i]) {
            return false;
        }
    }
    return true;

}
