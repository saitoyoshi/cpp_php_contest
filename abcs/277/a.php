<?php

$N = (int) trim(fgets(STDIN));
$b = [];
for ($i = 0; $i < $N; $i++) {
    $b[] = $s;
    $s = trim(fgets(STDIN));
    if (!cond1($s[0])) {
        echo 'No' . PHP_EOL;
        exit;
    }
    if (!cond2($s[1])) {
        echo 'No' . PHP_EOL;
        exit;
    }
    if (in_array($s,$b)) {
        echo 'No' . PHP_EOL;
        exit;
    }
}
echo 'Yes' . PHP_EOL;

function cond1($ch) {
    return $ch === 'H' || $ch === 'D' || $ch === 'C' || $ch === 'S';
}
function cond2($ch) {
    $arr = [
        'A','2','3','4','5','6','7','8','9','T','J','Q','K',
    ];
    return in_array($ch, $arr);
}
