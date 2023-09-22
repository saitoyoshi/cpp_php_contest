<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = trim(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    if ($s[$i] === 'o') {
        $X++;
    } else {
        if ($X !== 0) {
            $X--;
        }
    }
}
echo $X . PHP_EOL;
