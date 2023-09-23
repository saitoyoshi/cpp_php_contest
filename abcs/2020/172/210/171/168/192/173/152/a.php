<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a < $b) {
    echo str_repeat((string)$a,$b) . PHP_EOL;
} else {
    echo str_repeat((string)$b,$a) . PHP_EOL;
}
// $one = str_repeat((string)$a,$b);
// $another = str_repeat((string)$b,$a);

// $r = (strcmp($one,$another));
// if ($r === -1) {
//     echo $one . PHP_EOL;
// } else {
//     echo $another . PHP_EOL;
// }
