<?php

[$n,$m] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$b = array_map('intval',explode(" ", trim(fgets(STDIN))));
$max = max($a);
$indexes = array_keys($a,$max);
// for ($i = 0; $i < $n; $i++) {
//     if ($a[$i] === $max) {
//         $indexes[] = $i+1;
//     }
// }

// var_dump($indexes);exit;
// var_dump($b);exit;
foreach ($b as $v) {
    // echo $v . PHP_EOL;
    if (in_array($v-1,$indexes)) {
        echo 'Yes' . PHP_EOL;exit;
    }
}
// exit;
echo 'No' . PHP_EOL;
