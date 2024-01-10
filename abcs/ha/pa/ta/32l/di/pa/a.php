<?php

$s = trim(fgets(STDIN));
$len = strlen($s);
$cnt = 0;
for ($i = 0; $i < $len / 2; $i++) {
    if ($s[$i] !== $s[$len-1-$i]) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
