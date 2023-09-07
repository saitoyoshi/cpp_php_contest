<?php

[$N,$M,$P] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$d = $M;
$cnt = 0;
while ($d <= $N) {
    $cnt++;
    $d += $P;
}
echo $cnt . PHP_EOL;
