<?php

[$A,$B,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));

if ($A === 1) {
    echo 'YES' . PHP_EOL;
    exit;
}
if ($A % 2 === 0 && $B % 2 === 0 && $C % 2 !== 0) {
    echo 'NO' . PHP_EOL;
    exit;
}
$num = $A;

$rs = [];
while (count($rs) < $B) {
    $r = $num % $B;
    if ($r !== $C) {
        $rs[] = $r;
    } else {
        echo 'YES' . PHP_EOL;
        exit;
    }
    $num += $A;
}
echo 'NO' . PHP_EOL;
