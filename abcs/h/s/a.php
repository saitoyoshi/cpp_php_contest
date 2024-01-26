<?php

$s = trim(fgets(STDIN));
$N = strlen($s);
$sub1 = substr($s,0,($N-1)/2);
$sub2 = substr($s,($N+3)/2-1,$N);
if (isKaibun($s) && isKaibun($sub1) && isKaibun($sub2)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}

function isKaibun($s) {
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        if ($s[$i] !== $s[$len-1-$i]) {
            return false;
        }
    }
    return true;
}
