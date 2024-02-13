<?php

$s = str_split(trim(fgets(STDIN)));
$t = str_split(trim(fgets(STDIN)));
$pat = '/[atcoder@]/';
for ($i = 0; $i < count($s); $i++) {
    if ($s[$i] !== $t[$i]) {
        if ($s[$i] === '@') {
            if (preg_match($pat,$t[$i])) {
                ;
            } else {
                echo 'You will lose' . PHP_EOL;exit;
            }
        }
        elseif ($t[$i] === '@') {
            if (preg_match($pat,$s[$i])) {
                ;
            } else {
                echo 'You will lose' . PHP_EOL;exit;
            }
        } else {
            echo 'You will lose' . PHP_EOL;exit;
        }

    }
}
echo 'You can win' . PHP_EOL;
