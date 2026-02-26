<?php
// foreach
$fruits = ["apple", "banana", "cherry"];

//foreach ($fruits as $fruit) {
//    echo $fruit . PHP_EOL;

foreach ($fruits as $index => $fruit) {
    echo "{$index}: {$fruit}\n";

}