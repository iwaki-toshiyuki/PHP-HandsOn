<?php
// 配列から重複する要素を削除する
$numbers = [1, 2, 2, 3, 4, 4, 5, 5, 5];
$unique_numbers = array_values(array_unique($numbers));
echo json_encode($numbers) . PHP_EOL;
echo json_encode($unique_numbers) . PHP_EOL;