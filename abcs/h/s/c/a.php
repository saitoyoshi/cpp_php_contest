<?php


$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

$cnt = 0;
for ($i = 0; $i < $N-1; $i++) {
    if ($arr[$i] === $arr[$i+1]) {
        $cnt++;
        $arr[$i+1] += 101;
    }
}
// var_dump($cnt);
echo $cnt . PHP_EOL;
