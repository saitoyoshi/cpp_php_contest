<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$x = [];
$y = [];
for ($i = 0; $i < $M; $i++) {
    [$x[$i], $y[$i]] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$t = [];
for ($i = 0; $i < $M; $i++) {
    if (countChain($x[$i], $x, $y) === $N - 1) {
        $t[] = ($i + 1);
    }
}
if (count($t) === 1) {
    echo $t[0] . PHP_EOL;
    exit;
}
echo -1 . PHP_EOL;

function countChain($person, $x,$y) {
    $cnt = 0;
    while (1) {
        $index = array_search($person, $x);
        if ($index === false) {
            return $cnt;
        }
        $cnt++;
        $weaker = $y[$index];
        $person = $weaker;
    }
}
