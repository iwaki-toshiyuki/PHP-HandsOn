<?php
// 配列の各要素に対して、要素を選別する
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$even_numbers = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});
echo json_encode($numbers) . PHP_EOL;
echo json_encode(array_values($even_numbers)) . PHP_EOL;