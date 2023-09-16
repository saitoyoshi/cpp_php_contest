<?php
$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$num = array_shift($arr);
$result = [];
$result[] = $num;
foreach ($arr as $v) {
    while ($num !== $v) {
        if ($num < $v) {
            $num++;
        } else {
            $num--;
        }
        $result[] = $num;
    }
}
echo implode(" ", $result) . PHP_EOL;
