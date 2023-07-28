<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$min = 100;
for ($i = 0; $i < $N; $i++) {
    if ($min > $arr[$i]) {
        $min = $arr[$i];
    }
}
echo $min . PHP_EOL;
