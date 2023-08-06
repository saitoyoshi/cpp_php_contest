<?php

[$N,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$followers = [];
for ($i = 0; $i < $N; $i++) {
    $followers[$i] = [];
}
for ($i = 1; $i <= $Q; $i++) {
    $query = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if (count($query) === 3) {
        $x = $query[1];
        $y = $query[2];
        if (!in_array($x, $followers[$y])) {
            $followers[$y][] = $x;
        }
    } else {
        $z = $query[1];
        if (count($followers[$z]) === 0) {
            echo 'No' . PHP_EOL;
        } else {
            sort($followers[$z]);
            echo implode(" ", $followers[$z]) . PHP_EOL;;
        }
    }
}
