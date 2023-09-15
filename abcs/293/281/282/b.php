<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = [];
for ($i = 0; $i < $N; $i++) {
    $s[] = trim(fgets(STDIN));
}
$result = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        $iscorrect = true;
        for ($k = 0; $k < $M; $k++) {
            if ($s[$i][$k] === 'x' && $s[$j][$k] === 'x') {
                $iscorrect = false;
                break;
            }
        }
        if ($iscorrect) {
            $result++;
        }
    }
}
echo $result . PHP_EOL;
