<?php

const NUM_E = 2.71828;
echo "число Е = " . NUM_E . "<br>";
$num_el = NUM_E;

echo '$num_el = ' . "$num_el - " . gettype($num_el) . "<br>";

echo "меняем тип данных:<br>";

$num_el = (string) $num_el;
echo '$num_el = ' . "$num_el - " . gettype($num_el) . "<br>";

echo "меняем тип данных:<br>";

$num_el = (bool) $num_el;
echo '$num_el = ' . "$num_el - " . gettype($num_el) . "<br>";