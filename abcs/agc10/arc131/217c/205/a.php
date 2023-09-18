<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$powAC = $a ** $c;
$powBC = $b ** $c;
if ($powAC > $powBC) {
    echo '>' . PHP_EOL;
} elseif ($powAC < $powBC) {
    echo '<' . PHP_EOL;
} else {
    echo '=' . PHP_EOL;


}
