<?php

[$N,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    [$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $d = sqrt($x**2+$y**2);
    if ($d <= $D) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
