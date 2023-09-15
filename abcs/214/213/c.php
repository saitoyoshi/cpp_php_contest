<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$head = false;
arsort($arr);
foreach ($arr as $key => $point) {
    if($head) {
        echo $key+1 . PHP_EOL;
        exit;
    }
    $head = true;
}
