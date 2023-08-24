<?php

$N = (int) fgets(STDIN);
$num = $N;
if ($num <= 15) {
    $r = $num % 16;
    if (0 <= $r && $r <= 9) {
        echo '0' . $r . PHP_EOL;
        exit;
    }
    if (10 <= $r && $r <= 15) {
        if ($r === 10) {
            echo '0A' . PHP_EOL;
        } elseif ($r === 11) {
            echo '0B' . PHP_EOL;
        } elseif ($r === 12) {
            echo '0C' . PHP_EOL;
        } elseif ($r === 13) {
            echo '0D' . PHP_EOL;
        } elseif ($r === 14) {
            echo '0E' . PHP_EOL;
        } elseif ($r === 15) {
            echo '0F' . PHP_EOL;
        }
        exit;
    }
}
$rs = [];
while ($num >= 1) {
    $rs[] = $num % 16;
    $num /= 16;
}
$rs = array_reverse($rs);
foreach ($rs as $v) {
    if (10 <= $v && $v <= 15) {
        if ($v === 10) {
            echo 'A';
        } elseif ($v === 11) {
            echo 'B';
        } elseif ($v === 12) {
            echo 'C';
        } elseif ($v === 13) {
            echo 'D';
        } elseif ($v === 14) {
            echo 'E';
        } elseif ($v === 15) {
            echo 'F';
        }
    } else {
        echo $v;
    }
}
echo PHP_EOL;
