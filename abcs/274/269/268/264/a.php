<?php

[$r,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if (max(abs($r-8),abs($c-8)) % 2 === 0) {
    echo 'white' . PHP_EOL;
} else {
    echo 'black' . PHP_EOL;

}
// $grid = [];
// for ($i = 0; $i < 15; $i++) {
//     for ($j = 0; $j < 15; $j++) {
//         if (max(abs($i-7),abs($j-7)) % 2 === 0) {
//             $grid[$i][$j] = 0;
//         } else {
//             $grid[$i][$j] = 1;
//         }
//     }
// }
// foreach ($grid as $line) {
//     echo implode($line) . PHP_EOL;
// }
