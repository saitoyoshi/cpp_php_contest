<?php

[$V,$A,$B,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
while ($V > 0) {
    $V -= $A;
    if ($V < 0) {
        echo 'F' . PHP_EOL;
    } else {
        if ($V === 0) {
            echo 'M' . PHP_EOL;
            exit;
        }
        $V -= $B;
        if ($V < 0) {
            echo 'M' . PHP_EOL;
        } else {
            if ($V === 0) {
                echo 'T' . PHP_EOL;
                exit;
            }
            $V -= $C;
            if ($V < 0) {
                echo 'T' . PHP_EOL;
            } elseif ($V === 0) {
                echo 'F' . PHP_EOL;
            }
        }
    }
}
