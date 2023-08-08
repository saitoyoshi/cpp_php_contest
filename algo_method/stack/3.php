<?php

[$N,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_fill(0,$N,-1);
$head = $tail = 0;
for ($i = 0; $i < $Q; $i++) {
    $query = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if (count($query) === 1) {
        $A[$head] = -1;
        $head++;
        if ($head === $N) {
            $head = 0;
        }
    } else {
        $A[$tail] = $query[1];
        $tail++;
        if ($tail === $N) {
            $tail = 0;
        }
    }
}
foreach ($A as $v) {
    echo $v . PHP_EOL;
}
