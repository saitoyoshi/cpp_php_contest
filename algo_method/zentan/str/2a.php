<?php


$S = trim(fgets(STDIN));

function is_kaibun($s) {
    $len = strlen($s);
    for ($i = 0; $i < floor($len / 2); $i++) {
        if ($s[$i] !== $s[$len - 1 - $i]) {
            return false;
        }
    }
    return true;
}
if (is_kaibun($S)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
