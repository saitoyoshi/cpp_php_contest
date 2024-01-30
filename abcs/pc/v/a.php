<?php

[$H,$W,$X,$Y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = [];
for ($i = 0; $i < $H; $i++) {
    $s[] = trim(fgets(STDIN));
}
$cnt = 1;
for ($i = $X-1; $i >= 1; $i--) {
    if ($s[$i-1][$Y-1] === '#') {
        break;
    } else {
        $cnt++;
    }
}
for ($i = $X+1; $i <= $H; $i++) {
    if ($s[$i-1][$Y-1] === '#') {
        break;
    } else {
        $cnt++;
    }
}
for ($j = $Y-1; $j >= 1; $j--) {
    if ($s[$X-1][$j-1] === '#') {
        break;
    } else {
        $cnt++;
    }
}
for ($j = $Y+1; $j <= $W; $j++) {
    if ($s[$X-1][$j-1] === '#') {
        break;
    } else {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
