<?php

[$N,$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    [$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($A >= $H && $B >= $W) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
