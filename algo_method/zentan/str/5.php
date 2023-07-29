<?php

$S = trim(fgets(STDIN));
$T = trim(fgets(STDIN));

$SLen = strlen($S);
$TLen = strlen($T);
for ($i = 0; $i <= $SLen - $TLen; $i++) {
    if ($T[0] === $S[$i]) {
        $cnt = 1;
        for ($j = 1; $j < $TLen; $j++) {
            if ($T[$j] === $S[$i+$j]) {
                $cnt++;
            } else {
                break;
            }
        }
        if ($cnt === $TLen) {
            echo 'Yes' . PHP_EOL;
            exit;
        }
    }
}
echo 'No' . PHP_EOL;
