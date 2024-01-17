<?php

$P = (int) trim(fgets(STDIN));
function fac($n) {
    if ($n === 1) {
        return 1;
    }
    return $n * fac($n-1);
}
$cnt = 0;
for ($i = 10; $i >= 1 && $P !== 0; $i--) {
    if (fac($i) <= $P && $P < fac($i+1)) {
        while (1) {
            $P -= fac($i);
            // echo $P . PHP_EOL;
            $cnt++;
            if ($P < fac($i)) {
                break;
            }
        }
    }
}
echo $cnt . PHP_EOL;
