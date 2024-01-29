<?php

[$N,$T] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$tmp = [];
for ($i = 0; $i < $N; $i++) {
    [$c,$t] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if($t <= $T) {
        $tmp[] = $c;
    }
}
if (count($tmp) !== 0) {
    echo min($tmp) .PHP_EOL;
} else {
    echo 'TLE' . PHP_EOL;
}
