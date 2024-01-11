<?php

$N = (int) trim(fgets(STDIN));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$b = array_map('intval',explode(" ", trim(fgets(STDIN))));
$l = max($a);
$u = min($b);
if ($l > $u) {
    echo 0 . PHP_EOL;
} else {
    echo $u-$l+1 . PHP_EOL;
}
