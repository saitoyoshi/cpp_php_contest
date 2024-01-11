<?php

[$r,$D,$x2000] = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 1; $i <= 10; $i++) {
    $x = $r*$x2000-$D;
    echo $x . PHP_EOL;
    $x2000 = $x;
}
