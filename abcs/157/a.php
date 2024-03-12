<?php

$a = [];
for ($i = 0; $i < 3; $i++) {
    $a[$i] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$N = (int) trim(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    $b = (int) trim(fgets(STDIN));
    for ($k = 0; $k < 3; $k++) {
        for ($j = 0; $j < 3; $j++) {
            if ($a[$k][$j] === $b) {
                $a[$k][$j] = 777;
            }
        }
    }
}
if (isBingo($a)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
// for ($i = 0; $i < 3; $i++) {
//     for ($j = 0; $j < 3; $j++) {
//         echo $a[$i][$j] . ' ';
//     }
//     echo PHP_EOL;
// }

function isBingo(array $a) {
    if ($a[0][1] === $a[0][2] && $a[0][0] === $a[0][1]) {
        return true;
    }
    if ($a[1][1] === $a[1][2] && $a[1][0] === $a[1][1]) {
        return true;
    }
    if ($a[2][1] === $a[2][2] && $a[2][0] === $a[2][1]) {
        return true;
    }

    if ($a[0][0] === $a[1][0] && $a[1][0] === $a[2][0]) {
        return true;
    }
    if ($a[0][1] === $a[1][1] && $a[1][1] === $a[2][1]) {
        return true;
    }
    if ($a[0][2] === $a[1][2] && $a[1][2] === $a[2][2]) {
        return true;
    }

    if ($a[0][0] === $a[1][1] && $a[1][1] === $a[2][2]) {
        return true;
    }
    if ($a[0][2] === $a[1][1] && $a[1][1] === $a[2][0]) {
        return true;
    }
    return false;
}
