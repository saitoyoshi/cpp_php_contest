<?php

[$m,$d] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 1; $i <= $m ; $i++) {
    for ($j = 1; $j <= $d; $j++) {
        $oneth = $j % 10;
        $tenth = (int)($j / 10);
        if ($oneth >= 2 && $tenth >= 2) {
            if ($i === ($oneth * $tenth)) {
                $cnt++;
            }
        }
    }
}
echo $cnt . PHP_EOL;
