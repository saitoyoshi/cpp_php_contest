<?php

$N = (int) fgets(STDIN);
$sn = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sn[-1] = 0;
$a = [];
for ($i = 0; $i < $N; $i++) {
    $a[$i] = $sn[$i] - $sn[$i-1];
}
echo implode(" ", $a) . PHP_EOL;
