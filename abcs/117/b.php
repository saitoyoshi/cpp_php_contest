<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a < $b) {
    $bArr = range(-$b,-1,-1);
    if ($a === 1) {
        $aArr[0] = -array_sum($bArr);
    } else {
        $aArr = range(1,$a-1);
        $aArr[$a-1] = -array_sum(array_merge($aArr,$bArr));
    }
} elseif ($a > $b) {
  $aArr = range(1,$a);
  if ($b === 1) {
    $bArr[0] = -array_sum($aArr);
  } else {
      $bArr = range(-$b,-2,-1);
      $bArr[$b-1] = -(array_sum(array_merge($aArr,$bArr)));
    }
} else {
  $aArr = range(1,$a);
  $bArr = range(-$b,-1,-1);
}
echo implode(" ", array_merge($aArr,$bArr)) . PHP_EOL;
