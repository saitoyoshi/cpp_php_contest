<?php

[$N,$S,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = 'No';
for ($i = 0; $i < $N; $i++) {
    [$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($x < $S && $y > $D) {
        $result = 'Yes';
    }
}
echo $result . PHP_EOL;
