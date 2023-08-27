<?php

[$N,$H,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$P = array_map('intval',explode(" ", trim(fgets(STDIN))));
$diff = $X - $H;
for ($i = 0; $i < $N; $i++) {
    if ($P[$i] >= $diff) {
        echo $i+1 . PHP_EOL;
        exit;
    }
}
