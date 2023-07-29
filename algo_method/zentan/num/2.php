<?php

$N = (int) fgets(STDIN);
$cnt = 0;
for ($i = 1; $i <= $N; $i++) {
    if ($N % $i === 0) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
