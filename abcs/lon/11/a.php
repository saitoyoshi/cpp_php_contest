<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 1; $i <= $N; $i++) {
    $d = $arr[$i-1];
    for ($j = 1; $j <= $d; $j++) {
        $s = (string)$i . (string)$j;
        if (zorome($s)) {
            // var_dump($s);
            $cnt++;

        }
    }
}
echo $cnt . PHP_EOL;
function zorome($s) {
    $ch = $s[0];
    for ($i = 1; $i < strlen($s); $i++) {
        if ($ch !== $s[$i]) {
            return false;
        }
    }
    return true;
}
