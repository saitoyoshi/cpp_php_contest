<?php

$N = (int) fgets(STDIN);
for ($i = 0; $i < $N; $i++) {
    [$s,$t] = explode(" ", trim(fgets(STDIN)));
    if (!isset($a[$s.' '.$t])) {
        $a[$s.' '.$t] = 0;
    } else {
        $a[$s.' '.$t]++;
    }
}
$max = max($a);
if ($max !== 0) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
