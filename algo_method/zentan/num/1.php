<?php

$N = (int) fgets(STDIN);

$cnt = 0;
for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 !== 0 && $i % 3 !== 0 && $i % 5 !== 0) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
