<?php

$N = (int) fgets(STDIN);
$arr = [];
for ($i = 0; $i < $N; $i++) {
    $C = (int) fgets(STDIN);
    $arr[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$X = (int) fgets(STDIN);
$people = [];
$betCount = [];
for ($i = 0; $i < $N; $i++) {
    if (in_array($X,$arr[$i])) {
        $people[] = $i + 1;
        $betCount[] = count($arr[$i]);
    }
}
if (count($people) === 0) {
    echo 0 . PHP_EOL;
    echo PHP_EOL;
    exit;
}
$min = min($betCount);
$result = [];
for ($i = 0; $i < count($people); $i++) {
    if ($betCount[$i] === $min) {
        $result[] = $people[$i];
    }
}
echo count($result) . PHP_EOL;
echo implode(" ", $result) . PHP_EOL;
