<?php

[$n,$l] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
foreach ($arr as $v) {
    if ($v >= $l) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
