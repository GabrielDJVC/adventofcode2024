<?php

include_once("load_file.php");
$arr_payload = openFile("files/day1.txt");

$total = 0;

$part1 = [];
$part2 = [];

foreach ($arr_payload as $line) {
    $array = explode("  ", trim($line));
   
    $part1[] = $array[0];
    $part2[] = $array[1];
}

sort($part1);
sort($part2);

// echo '<pre>';
// var_dump($total);
// echo '</pre>';

foreach ($part1 as $key => $value) {
    $total += abs(intval($part2[$key]) - intval($value));
}

echo '<pre>';
var_dump($total);
echo '</pre>';
