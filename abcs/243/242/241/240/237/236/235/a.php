<?php

$N = (int) fgets(STDIN);
$H = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $N-1; $i++) {
    if ($H[$i] >= $H[$i+1]) {
        echo $H[$i] . PHP_EOL;
        exit;
    }
}
echo $H[$N-1] . PHP_EOL;
