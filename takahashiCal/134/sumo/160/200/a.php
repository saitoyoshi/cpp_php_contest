<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $K; $i++) {
    if ($N % 200 === 0) {
        $N /= 200;
    } else {
        $N = (string)$N . '200';
    }
}
echo $N . PHP_EOL;
