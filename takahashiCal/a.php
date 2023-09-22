<?php

[$M,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 22; $i <= $D; $i++) {
    $d1 = $i % 10;
    if ($d1 < 2) {
        continue;
    }
    $d10 = floor($i/10);
    if ($d1 * $d10 <= $M) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
