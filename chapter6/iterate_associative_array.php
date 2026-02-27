<?php
// 連想配列を繰り返し処理する
$associative_array = [
    "name" => "Alice",
    "age" => 30,
    "city" => "Wonderland"
];

foreach ($associative_array as $key => $value) {
    echo "{$key}: {$value}" . PHP_EOL;
}