<?php

$N = (int) trim(fgets(STDIN));
$a = [];
for ($i = 0; $i < $N; $i++) {
    [$n,$val] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($n === 1) {
        $a[] = $val;
    } else {
        $len = count($a);
        echo $a[$len-$val] . PHP_EOL;;
    }
}
