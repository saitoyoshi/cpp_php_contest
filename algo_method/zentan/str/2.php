<?php

$S = trim(fgets(STDIN));

function is_kaibun($s1) {
    $s2 = "";
    for ($i = 1; $i <= strlen($s1); $i++) {
        $s2 = $s2 . $s1[-$i];
    }
    return $s1 === $s2;
}
if (is_kaibun($S)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
