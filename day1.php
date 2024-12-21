<?php

include_once("load_file.php");
$arr_payload = openFile("files/day1.txt");

$total = 0;

$part1 = [];
$part2 = [];

foreach ($arr_payload as $line) {
    $array = explode("  ", trim($line));
   
    $part1[] = str_split($array[0]);
    $part2[] = str_split($array[1]);
}

sort($part1[0]);
sort($part2[0]);


foreach ($part1 as $key => $value) {
    $total += abs(intval($part2[0][$key]) - intval($value));
}

// echo '<pre>';
// var_dump($total);
// echo '</pre>';
