<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

$max = 0;
$min = 1000000000;
for ($i = 0; $i < $N; $i++) {
    if ($max < $arr[$i]) $max = $arr[$i];
    if ($min > $arr[$i]) $min = $arr[$i];
}
echo ($max-$min) . PHP_EOL;
