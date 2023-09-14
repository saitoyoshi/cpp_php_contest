<?php

[$N,$P] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
foreach ($arr as $score) {
    if ($score < $P) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
