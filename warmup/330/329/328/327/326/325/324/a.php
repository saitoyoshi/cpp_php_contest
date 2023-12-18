<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$first = array_shift($arr);
foreach ($arr as $v) {
    if ($first !== $v) {
        echo "No" . PHP_EOL;
        exit;
    }
}
echo "Yes" . PHP_EOL;
