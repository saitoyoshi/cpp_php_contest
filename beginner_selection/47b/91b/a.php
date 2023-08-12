<?php

$N = (int) fgets(STDIN);
$s = [];
for ($i = 0; $i < $N; $i++) {
    $string = trim(fgets(STDIN));
    if (array_key_exists($string, $s)) {
        $s[$string]++;
    } else {
        $s[$string] = 1;
    }
}
$M = (int) fgets(STDIN);
$t = [];
for ($i = 0; $i < $M; $i++) {
    $string = trim(fgets(STDIN));
    if (array_key_exists($string, $t)) {
        $t[$string]--;
    } else {
        $t[$string] = -1;
    }
}
$result = $s;
foreach ($t as $key => $value) {
    if (array_key_exists($key, $result)) {
        $result[$key] += $value;
    } else {
        $result[$key] = $value;
    }
}
$resultVal = max($result);
if ($resultVal < 0) {
    echo '0' . PHP_EOL;
} else {
    echo $resultVal . PHP_EOL;
}
