<?php

[$r,$D,$x2000] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$current = $x2000;
for ($i = 1; $i <= 10; $i++) {
    $next =  $r * $current - $D;
    echo $r *  $current - $D . PHP_EOL;;
    $current = $next;
}
