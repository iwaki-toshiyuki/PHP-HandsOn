<?php
// 配列の要素にアクセスする
$fruits = ["apple", "banana", "cherry", "date", "elderberry"];
echo $fruits[0] . PHP_EOL;
echo $fruits[1] . PHP_EOL;
echo $fruits[2] . PHP_EOL;

//範囲を使ったアクセス
$fruits2 = ["apple", "banana", "cherry", "date", "elderberry"];
echo json_encode(array_slice($fruits2, 1, 3)) . PHP_EOL;
