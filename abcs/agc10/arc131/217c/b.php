<?php

$N = (int) fgets(STDIN);
$p = array_map('intval',explode(" ", trim(fgets(STDIN))));
$q = [];
for ($i = 1; $i <= $N; $i++) {
    $q[$p[$i-1]-1] = $i;
}
// var_dump($q);exit;
for ($i = 0; $i < $N-1; $i++) {
    echo $q[$i] . ' ';
}
echo $q[$N-1] . PHP_EOL;
