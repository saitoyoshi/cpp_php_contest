<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$num = 0;
for ($i = 0; $i < 3; $i++) {
    $num = $arr[$num];
}
echo $num . PHP_EOL;
