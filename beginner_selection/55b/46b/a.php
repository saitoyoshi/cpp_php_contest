<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = $K;
for ($i = 2; $i <= $N; $i++) {
    $result *= $K-1;
}
echo $result . PHP_EOL;
