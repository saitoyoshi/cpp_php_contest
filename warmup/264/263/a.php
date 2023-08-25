<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$t = array_count_values($arr);
rsort($t);
$fullhouse = [3,2];
if ($t === $fullhouse) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
