<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($x = 0.01; $x < 100000; $x += 0.01) {
    if (getExp($N,$x) >= $M) {
        echo $x . PHP_EOL;
        exit;
    }
}


function getExp($N,$x) {
    $result = $N + 1;
    for ($i = 1; $i <= 5; $i++) {
        $result *= $x;
        $result += 1;
    }
    return $result;
}
