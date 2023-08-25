<?php

// floatあたりはめんどくさいのでパス
[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo (int)(($A + $B - 1) / $B) . PHP_EOL;
