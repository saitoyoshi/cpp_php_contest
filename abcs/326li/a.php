<?php

$N = (int) trim(fgets(STDIN));
for ($i = $N; $i <= 999; $i++) {
    $s = (string)$i;
    $hth = (int)$s[0];
    $tenth = (int)$s[1];
    $oneth = (int)$s[2];
    if ($hth*$tenth === $oneth) {
        echo $s . PHP_EOL;
        exit;
    }

}
