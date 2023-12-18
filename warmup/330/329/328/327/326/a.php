<?php

[$start , $end] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$diff = $end - $start;
if ($diff > 0) {
    if ($diff <= 2) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }
} else {
    $diff = abs($diff);
    if ($diff <= 3) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;;
    }
}
