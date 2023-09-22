<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$p = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($p);
$result = 0;
for ($i = 0; $i < $K; $i++) {
    $result += $p[$i];
}
echo $result . PHP_EOL;
