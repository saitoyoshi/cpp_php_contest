<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
$naiseki = 0;
for ($i = 0; $i < $N; $i++) {
    $naiseki += $A[$i] * $B[$i];
}
echo (($naiseki === 0) ? 'Yes' : 'No') . PHP_EOL;
