<?php

$S = trim(fgets(STDIN));
$len = strlen($S);
$cnt = 0;
for ($i = 0; $i < $len - 1; $i++) {
    if ($S[$i] === $S[$i+1]) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
