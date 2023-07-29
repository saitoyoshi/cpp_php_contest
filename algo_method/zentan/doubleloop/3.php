<?php

function isKaibun(string $s) {
    $len = strlen($s);
    for ($i = 0; $i < floor($len / 2); $i++) {
        if ($s[$i] !== $s[$len - 1 - $i]) {
            return false;
        }
    }
    return true;
}

[$L,$R] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = $L; $i <= $R; $i++) {
    if (isKaibun($i)) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
