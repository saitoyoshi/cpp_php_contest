<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = [];
for ($i = 0; $i < $N; $i++) {
    $s[] = trim(fgets(STDIN));
}
$s = array_slice($s,0,$K);
usort($s,'strcmp');
for ($i = 0; $i < $K; $i++) {
    echo $s[$i] . PHP_EOL;
}
