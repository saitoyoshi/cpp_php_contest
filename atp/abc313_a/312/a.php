<?php

$string = trim(fgets(STDIN));
if ($string === "ACE" || $string === "BDF" || $string === "CEG" || $string === "DFA" || $string === "EGB" || $string === "FAC" || $string === "GBD") {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}
