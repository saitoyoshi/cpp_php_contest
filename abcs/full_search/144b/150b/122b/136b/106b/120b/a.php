<?php

[$A,$B,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$smaller = min($A,$B);
$dividors = [];
for ($i = 1; $i <= $smaller; $i++) {
    if ($A % $i === 0 && $B % $i === 0) {
        $dividors[] = $i;
    }
}
rsort($dividors);
echo $dividors[$K-1] . PHP_EOL;
