<?php

[$b,$g] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($b > $g) {
    echo 'Bat' . PHP_EOL;
} else {
    echo 'Glove' . PHP_EOL;

}
