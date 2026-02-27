<?php
// 配列をソートする
$numbers = [5, 3, 8, 1, 2, 7, 4, 6];
echo json_encode($numbers) . PHP_EOL;
sort($numbers);

// sort関数を使わずにソートする方法
// for ($i = 0; $i < count($numbers); $i++) {
//     for ($j = 0; $j < count($numbers) - 1; $j++) {
//         if ($numbers[$j] > $numbers[$j + 1]) {
//             $tmp_number = $numbers[$j];
//             $numbers[$j] = $numbers[$j + 1];
//             $numbers[$j + 1] = $tmp_number;
//         }
//     }
// }

echo json_encode($numbers) . PHP_EOL;