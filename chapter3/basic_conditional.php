<?php
// 基本的なif文の使い方
$number = 5;

if ($number > 5) {
    echo "この数値は5より大きいです";
} elseif ($number == 5) {
    echo "この数値は5です";
} else {
    echo "この数値は5より小さいです";
}