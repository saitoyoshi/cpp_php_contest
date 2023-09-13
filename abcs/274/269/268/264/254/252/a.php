<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
$max = max($A);
$a = [];
for ($i = 0; $i < $N; $i++) {
    if ($A[$i] === $max) {
        $a[] = $i+1;
    }
}
foreach ($B as $v) {
    if (in_array($v, $a)) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
