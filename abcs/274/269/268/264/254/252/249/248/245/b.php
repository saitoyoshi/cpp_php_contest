<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
for ($i = 0; $i <= 2000; $i++) {
    if (!in_array($i,$arr)) {
        echo $i . PHP_EOL;
        exit;
    }
}
