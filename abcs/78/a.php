<?php

[$x,$y,$z] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo floor(($x-$z) / ($y+$z)) . PHP_EOL;
