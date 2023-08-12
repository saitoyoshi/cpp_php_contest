<?php

[$A,$B,$C,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$range1 = [$A,$B];
$range2 = [$C,$D];
$range = [$range1,$range2];
usort($range, function ($a,$b) {
    if ($a[0] === $b[0]) {
        return $a[1] < $b[1] ? -1 : 1;
    }
    return $a[0] < $b[0] ? -1 : 1;
} );

// var_dump($range);
if ($range[0][1] >= $range[1][0]) {
    // 重なる
    if ($range[0][1] >= $range[1][1]) {
        echo ($range[1][1] - $range[1][0]) . PHP_EOL;
    } else {
        echo ($range[0][1]  - $range[1][0]) . PHP_EOL;
    }
} else {
    echo '0' . PHP_EOL;
}
