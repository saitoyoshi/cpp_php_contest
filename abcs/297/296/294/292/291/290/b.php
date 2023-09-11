<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = trim(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    if ($s[$i] === 'o') {
        $K--;
        if ($K < 0) {
            $s[$i] = 'x';
        }
    }
}
echo $s . PHP_EOL;
