<?php

$N = (int) fgets(STDIN);
$a = [];
for ($i = 0; $i < $N; $i++) {
    [$name, $height] = explode(" ", trim(fgets(STDIN)));
    $height = (int)$height;
    $a[$name] = $height;
}
arsort($a);
echo array_keys($a)[1] . PHP_EOL;;
