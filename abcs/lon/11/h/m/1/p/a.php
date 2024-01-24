<?php

$one = ['AB','BA','BC','CB','CD','DC','DE','ED','EA','AE'];
$another = ['AC','CA','AD','DA','BD','DB','BE','EB','CE','EC','CA','AC'];

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
if (which($s,$one,$another) === which($t,$one,$another)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;

}

function which($s,$one,$another) {
    if (in_array($s,$one)) {
        return 1;
    }
    if (in_array($s,$another)) {
        return 2;
    }
}
