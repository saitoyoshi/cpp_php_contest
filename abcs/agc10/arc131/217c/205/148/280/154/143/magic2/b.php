<?php

[$r,$g,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$k = (int) fgets(STDIN);

// $r < $g && $g < $b
$cnt = 0;
while ($r >= $g) {
    $cnt++;
    $g *= 2;
}
while ($g >= $b) {
    $cnt++;
    $b *= 2;
}
echo (($cnt <= $k) ? 'Yes' : 'No') . PHP_EOL;
