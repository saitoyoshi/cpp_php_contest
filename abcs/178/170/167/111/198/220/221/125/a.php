<?php

$N = (int) trim(fgets(STDIN));
$v = array_map('intval',explode(" ", trim(fgets(STDIN))));
$c = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = 0;
for ($i = 0; $i < $N; $i++) {
    $gain = $v[$i]-$c[$i];
    if ($gain > 0) {
        $result += $gain;
    }
}
echo $result . PHP_EOL;
