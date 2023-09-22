<?php

$X = (int) fgets(STDIN);
$thousand = floor($X/500);
$remain = $X % 500;
$five = floor($remain/5);
echo ($thousand*1000+$five*5) . PHP_EOL;
