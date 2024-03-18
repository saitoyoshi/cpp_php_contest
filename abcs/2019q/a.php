<?php

$N = (int) trim(fgets(STDIN));
$s = str_split(trim(fgets(STDIN)));
$s1 = str_split(trim(fgets(STDIN)));
$s2 = str_split(trim(fgets(STDIN)));

$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    if ($s[$i] === $s1[$i] && $s1[$i] === $s2[$i]) {
        ;
    } elseif ($s[$i] === $s1[$i] && $s1[$i] !== $s2[$i]) {
        $cnt++;
    } elseif ($s[$i] !== $s1[$i] && $s1[$i] === $s2[$i]) {
        $cnt++;
    } elseif ($s[$i] === $s2[$i] && $s1[$i] !== $s2[$i]) {
        $cnt++;
    } else {
        $cnt += 2;
    }
}
echo $cnt . PHP_EOL;
