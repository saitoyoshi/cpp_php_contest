<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$L = array_map('intval',explode(" ", trim(fgets(STDIN))));
rsort($L);
$result = 0;
for ($i = 0; $i < $K; $i++) {
    $result += $L[$i];
}
echo $result . PHP_EOL;
