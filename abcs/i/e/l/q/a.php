<?php

[$n,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    if ($s[$i] === 'o') {
        $x++;
    } elseif ($s[$i] === 'x' && $x !== 0) {
        $x--;
    }
}
echo $x . PHP_EOL;
