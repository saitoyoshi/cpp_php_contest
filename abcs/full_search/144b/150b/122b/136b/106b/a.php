<?php

$N = (int) fgets(STDIN);

$result = 0;
for ($i = 1; $i <= $N; $i += 2) {
    if (getYakusuCount($i) === 8) {
        $result++;
    }
}
echo $result . PHP_EOL;

function getYakusuCount($num) {
    $result = 0;
    for ($i = 1; $i * $i <= $num; $i++) {
        if ($num % $i !== 0) {
            continue;
        } else {
            if ($i === (int)$num / $i) {
                $result++;
            } else {
                $result += 2;
            }
        }
    }
    return $result;
}
