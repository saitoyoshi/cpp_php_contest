<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$evens = array_filter($arr,fn($v) => $v % 2 === 0);
foreach ($evens as $even) {
    if (!($even % 3 === 0 || $even % 5 === 0)) {
        echo 'DENIED' . PHP_EOL;
        exit;
    }
}
echo 'APPROVED' . PHP_EOL;
