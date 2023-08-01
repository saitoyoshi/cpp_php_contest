<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$blocks = [];
for ($i = 0; $i < $H; $i++) {
    $blocks[] = trim(fgets(STDIN));
}
[$p,$q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $W; $i++) {
    if ($blocks[$p][$i] === "#") {
        $cnt++;
    }
}
for ($i = 0; $i < $H; $i++) {
    if ($blocks[$i][$q] === "#") {
        $cnt++;
    }
}
if ($blocks[$p][$q] === "#") {
    $cnt--;
}

echo $cnt . PHP_EOL;
