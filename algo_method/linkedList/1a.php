<?php

$nodes = [];

for ($i = 0; $i < 10; $i++)
{
  $nodes[$i] = [
    'value' => $i,
    'next' => $i + 1
  ];
}
$nodes[count($nodes) - 1]['next'] = -1;

$nodes[7]['next'] = 3;
$nodes[3]['next'] = 8;
$top = 0;
for ($pos = $top; $pos >= 0; $pos = $nodes[$pos]['next']) {
    echo $nodes[$pos]['value'] . PHP_EOL;
}
