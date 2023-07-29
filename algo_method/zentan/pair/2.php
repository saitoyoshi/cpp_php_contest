<?php

[$L, $R] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$cnt = 0;
for ($i = $L; $i <= $R; $i++) {
    for ($j = $i+1; $j <= $R; $j++) {
        if (($i % 10 === $j % 10)) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
