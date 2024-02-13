<?php

$s = trim(fgets(STDIN));
echo str_replace(['a','i','u','e','o'],"",$s) . PHP_EOL;
