<?php

$S = trim(fgets(STDIN));
$T = trim(fgets(STDIN));

$SLen = strlen($S);
$TLen = strlen($T);
for ($i = 0; $i <= $SLen - $TLen; $i++) {
    $substr = substr($S,$i,$TLen);
    if ($substr === $T) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
