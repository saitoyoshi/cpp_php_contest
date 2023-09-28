<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

for ($i = 0; $i <= $a; $i++) {
    if ($i*2+4*($a-$i) === $b) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
