<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
[$a1,$a2,$a3] = $arr;
if (($a3-$a2) === ($a2-$a1)) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}
