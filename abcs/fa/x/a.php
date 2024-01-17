<?php

[$n,$m] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$b = array_map('intval',explode(" ", trim(fgets(STDIN))));
$c = [];
foreach ($a as $v) {
    if (!in_array($v, $b)) {
        $c[] = $v;
    }
}
foreach ($b as $v) {
    if (!in_array($v, $a)) {
        $c[] = $v;
    }
}
sort($c);
echo implode(" ", $c) . PHP_EOL;;
