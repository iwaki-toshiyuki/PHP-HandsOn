<?php
// 配列に要素を追加する
$fruits = ["apple", "banana"];
echo json_encode($fruits) . PHP_EOL;
array_push($fruits, "cherry");
echo json_encode($fruits) . PHP_EOL;

// array_unshift を使って要素を追加する
$fruits2 = ["apple", "banana"];
echo json_encode($fruits2) . PHP_EOL;
array_unshift($fruits2, "cherry");
echo json_encode($fruits2) . PHP_EOL;