<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
[$a,$b,$c,$d] = $arr;
if ($a+$b+$c === $d) {
    echo 'Yes';
} elseif ($a+$d === $b+$c) {
    echo 'Yes';
} elseif ($a+$c === $b+$d) {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
