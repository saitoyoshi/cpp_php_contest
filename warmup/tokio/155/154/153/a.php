<?php

[$h,$a] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
while ($h > 0) {
    $h -= $a;
    $cnt++;
}
echo $cnt . PHP_EOL;
