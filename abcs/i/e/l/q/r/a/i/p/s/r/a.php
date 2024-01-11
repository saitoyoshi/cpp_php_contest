<?php

$N = (int) trim(fgets(STDIN));
$s = trim(fgets(STDIN));
$r = $b = 0;
for ($i = 0; $i < $N; $i++) {
    if ($s[$i] === 'R') {
        $r++;
    } else {
        $b++;
    }
}
echo (($r > $b) ? 'Yes' : 'No') . PHP_EOL;
