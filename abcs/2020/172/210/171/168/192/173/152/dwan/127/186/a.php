<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$blocks = [];
for ($i = 0; $i < $H; $i++) {
    $blocks[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$min = 109;
foreach ($blocks as $block) {
    foreach ($block as $v) {
        if ($min > $v) {
            $min = $v;
        }
    }
}
$result = 0;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        $result += ($blocks[$i][$j]-$min);
    }
}
echo $result . PHP_EOL;
