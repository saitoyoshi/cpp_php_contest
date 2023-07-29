<?php

function isKaibun(string $s) {
    $len = strlen($s);
    for ($i = 0; $i < floor($len / 2); $i++) {
        if ($s[$i] !== $s[$len - 1 - $i]) {
            return false;
        }
    }
    return true;
}

$N = (int) fgets(STDIN);
$strings = [];
for ($i = 0; $i < $N; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$cnt = 0;
foreach ($strings as $string) {
    if (isKaibun($string)) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
