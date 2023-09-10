<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = trim(fgets(STDIN));

$needle = 'o';
$offset = 0;
$positions = [];

while (($pos = strpos($s, $needle, $offset)) !== false) {
    $positions[] = $pos;
    $offset = $pos + 1;
}
// var_dump($positions);
$edge = $positions[$K-1];
for ($i = 0; $i <= $edge; $i++) {
    echo $s[$i];
}
for ($i = $edge+1; $i < $N; $i++) {
    echo 'x';
}

echo PHP_EOL;
