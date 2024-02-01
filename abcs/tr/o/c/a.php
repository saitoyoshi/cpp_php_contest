<?php

$N = (int) trim(fgets(STDIN));
[$D,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    $a = (int) trim(fgets(STDIN));
    for ($j = 0; $j < $D; $j++) {
        if ($j*$a+1 <= $D) {
            $cnt++;
        }
    }
}
echo ($cnt+$X) . PHP_EOL;
