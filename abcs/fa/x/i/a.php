<?php

[$a,$b,$c,$d] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($b >= $c && $a <= $d) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
