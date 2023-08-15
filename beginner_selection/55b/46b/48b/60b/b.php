<?php

[$A,$B,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// A,2A,3A,,,BA をBで割ったあまりのCになればいい。
// B <= 100の制約があるので全探索が可能

for ($i = 1; $i <= 100; $i++) {
    if (($i * $A) % $B === $C) {
        echo 'YES' . PHP_EOL;
        exit;
    }
}
echo 'NO' . PHP_EOL;
