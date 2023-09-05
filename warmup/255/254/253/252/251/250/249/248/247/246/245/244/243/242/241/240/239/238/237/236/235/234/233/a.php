<?php

[$X,$Y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($X >= $Y) {
    echo 0 . PHP_EOL;
    exit;
}
$d = $Y-$X;
if ($d % 10 === 0) {
    echo $d / 10 . PHP_EOL;
} else {
    echo  (int)($d / 10) + 1 . PHP_EOL;;

}
