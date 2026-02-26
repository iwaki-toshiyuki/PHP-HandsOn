<?php
// indexを使って要素を変更する
$fruits = ["apple", "banana", "cherry"];
echo json_encode($fruits) . PHP_EOL;
$fruits[1] = "avocado";
echo json_encode($fruits) . PHP_EOL;