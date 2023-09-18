<?php

[$r,$g,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$k = (int) fgets(STDIN);

// $r < $g && $g < $b
$flag = false;
for ($i = 0; $i <= $k; $i++) {
    for ($j = 0; $j < $k; $j++) {
        for ($l = 0; $l < $k; $l++) {
            $x = $r * 2 ** $i;
            $y = $g * 2 ** $j;
            $z = $b * 2 ** $l;
            if ($i+$j+$l <= $k && $x < $y && $y < $z) {
                $flag = true;
            }
        }
    }
}
echo (($flag) ? 'Yes' : 'No') . PHP_EOL;
