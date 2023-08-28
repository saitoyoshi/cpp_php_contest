<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

$accs[0] = 0;
for ($i = 0; $i < $N - 1; $i++) {
    $accs[$i+1] = $accs[$i] + $arr[$i];
}
// var_dump($accs);
$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    [$l,$r] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    echo $accs[$r] - $accs[$l] . PHP_EOL;
}
