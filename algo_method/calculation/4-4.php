<?php

[$N,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$X = array_map('intval',explode(" ", trim(fgets(STDIN))));
$accs[0] = 0;
for ($i = 0; $i < $N; $i++) {
    $accs[$i+1] = $accs[$i] + $X[$i];
}
// var_dump($accs);
$index = -1;
$max = -1;
for ($i = 0; $i < $N - $D + 1; $i++) {
    if (($accs[$i+$D] - $accs[$i]) >= $max) {
        $max = $accs[$i+$D] - $accs[$i];
        $index = $i;
    }
}
echo $index . '~' . ($index+$D-1) . PHP_EOL;
