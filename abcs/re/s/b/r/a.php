<?php

$s = trim(fgets(STDIN));
for ($i = 0,$len = strlen($s);$i<$len; $i++) {
    if ($s[$i] === '.') {
        echo substr($s,0,$i) . PHP_EOL;exit;
    }
}
echo $s . PHP_EOL;
