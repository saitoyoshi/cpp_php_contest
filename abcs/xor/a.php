<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
$r = [];
foreach ($A as $v) {
    if (!in_array($v,$B)) {
        $r[] = $v;
    }
}
foreach ($B as $v) {
    if (!in_array($v,$A)) {
        $r[] = $v;
    }
}
sort($r);
echo implode(" ", $r) . PHP_EOL;
