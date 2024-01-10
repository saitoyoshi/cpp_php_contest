<?php

[$n,$m] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$b = array_map('intval',explode(" ", trim(fgets(STDIN))));
// $bの配列内の値を含んで＄Aのが大きければいい
foreach ($b as $v) {
    $k = array_search($v, $a);
    if ($k !== false) {
        unset($a[$k]);
    } else {
        echo 'No' . PHP_EOL;exit;
    }
}
echo 'Yes' . PHP_EOL;
