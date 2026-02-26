<?php
// 配列から要素を削除する
$fruits = ["apple", "banana", "avocado"];
echo json_encode($fruits) . PHP_EOL;
array_pop($fruits);
echo json_encode($fruits) . PHP_EOL;

// array_shiftメソッドを使って要素を削除する
$fruits2 = ["apple", "banana", "avocado"];
echo json_encode($fruits2) . PHP_EOL;
array_shift($fruits2);
echo json_encode($fruits2) . PHP_EOL;

//unset を使って要素を削除する
$fruits3 = ["apple", "banana", "avocado"];
echo json_encode($fruits3) . PHP_EOL;
unset($fruits3[1]);
echo json_encode(array_values($fruits3)) . PHP_EOL;