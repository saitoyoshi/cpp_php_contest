<?php

$a = range(0,4);
$cnt = 0;
for ($i = 0; $i < (1 << count($a)); $i++) {
    $t = [];
    for ($j = 0; $j < count($a); $j++) {
        if ($i & (1 << $j)) {
            $t[] = $a[$j];
        }
    }
    $cnt++;
    echo '{' . implode(" ", $t) . '}' . PHP_EOL;;
}
echo $cnt . PHP_EOL;
