<?php

[$S,$T,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($S < $T) {
    if ($S <= $X && $X < $T) {
        echo 'Yes' . PHP_EOL;
    } else {
        echo 'No' . PHP_EOL;
    }
} else {
    if ($X < $T || $S <= $X) {
        echo 'Yes' . PHP_EOL;
    } else {
        echo 'No' . PHP_EOL;
    }
}
