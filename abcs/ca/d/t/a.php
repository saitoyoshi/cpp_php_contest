<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));

$t = [$X];
$r = 1;
while (1) {
    if (in_array($a[$X-1],$t)) {
        break;
    } else {
        $r++;
    }
    $t[] = $a[$X-1];
    $X = $a[$X-1];
}
echo $r . PHP_EOL;
