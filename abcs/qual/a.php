<?php

$a = [1=>0,2=>0,3=>0,4=>0];
for ($i = 0; $i < 3; $i++) {
    [$v1,$v2] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if (array_key_exists($v1,$a)) {
        $a[$v1]++;
    }
    if (array_key_exists($v2,$a)) {
        $a[$v2]++;
    }
}
if (isOK($a)) {
    echo 'YES' . PHP_EOL;
} else {
    echo 'NO' . PHP_EOL;
}
function isOK($a) {
    $f1 = count(array_filter($a,fn($v) => $v>=1)) === 4;
    $f2 = count(array_filter($a,fn($v) => $v <= 2)) === 4;
    return $f1&&$f2;
}
