<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
$bucket = [];
for ($i = 0; $i < $N; $i++) {
    if (!isset($bucket[$A[$i]])) {
        $bucket[$A[$i]] = 1;
    } else {
        $bucket[$A[$i]]++;
    }
}
for ($i = 0; $i < $M; $i++) {
    if (!isset($bucket[$B[$i]])) {
        echo 'No' . PHP_EOL;
        exit;
    } elseif ($bucket[$B[$i]] <= 0) {
        echo 'No' . PHP_EOL;
        exit;
    } else {
        $bucket[$B[$i]]--;
    }
}
echo 'Yes' . PHP_EOL;
