<?php

$in = array_unique(str_split(trim(fgets(STDIN))));
$cnt = count($in);
if ($cnt === 3) {
    echo 6 . PHP_EOL;
} elseif ($cnt === 2) {
    echo 3 . PHP_EOL;
} else {
    echo 1 . PHP_EOL;
}
