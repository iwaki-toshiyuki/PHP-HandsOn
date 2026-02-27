<?php
// 配列の要素を結合して、文字列を作る
$words = ["Hello", "world", "this", "is", "PHP"];
$joined_string = join(" ", $words);
echo json_encode($words) . PHP_EOL;
echo json_encode($joined_string). PHP_EOL;