<?php

$N = (int) trim(fgets(STDIN));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $N-2; $i++) {
    if (ok($a[$i],$a[$i+1],$a[$i+2])) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;

function ok($n1,$n2,$n3) {
    if ($n1 < $n2 && $n2 < $n3) {
        return true;
    }
    if ($n1 > $n2 && $n2 > $n3) {
        return true;
    }
    return false;
}
