<?php

$N = (int) trim(fgets(STDIN));
if ($N < 0) {
    if ($N % 10 === 0) {
        echo intdiv($N,10);
    } else {
        echo intdiv($N,10) - 1;
    }
} else {
    echo intdiv($N,10);

}
