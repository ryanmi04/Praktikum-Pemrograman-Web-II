<?php

$radius = 4.2;
$height = 5.4;
$lenght = 8.9;
$width = 14.7;
$side = 7.9;

$Vcone = 1/3 * pi() * ($radius * $radius) * $height;

echo round($Vcone, 3), " m3";

?>