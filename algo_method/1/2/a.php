<?php

$N = (int) fgets(STDIN);
$schedules = [];
for ($i = 1; $i <= $N; $i++) {
    $schedules[] = array_map(function ($v) {
        return (int) $v;
    }, explode(" ", trim(fgets(STDIN))));
}
usort($schedules, function($a,$b) {
    if ($a[1] === $b[1]) {
        return $a[0] < $b[0] ? 1 : -1;
    } else {
        return $a[1] < $b[1] ? -1 : 1;
    }
});
$res = 0;
$currentTime = 0;
foreach ($schedules as $schedule) {
    if ($currentTime <= $schedule[0]) {
        $res++;
        $currentTime = $schedule[1];
    }
}
echo $res . PHP_EOL;
// var_dump($schedules);
