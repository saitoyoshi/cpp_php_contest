<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$h = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
foreach ($h as $h) {
    if ($h >= $K) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
