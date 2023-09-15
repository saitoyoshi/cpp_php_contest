<?php

[$S,$T] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$cnt = 0;
for ($a = 0; $a <= 100; $a++) {
    for ($b = 0; $b <= 100; $b++) {
        for ($c = 0; $c <= 100; $c++) {
            if ($a+$b+$c <= $S && $a*$b*$c <= $T) {
                $cnt++;
            }
        }
    }
}
echo $cnt . PHP_EOL;
