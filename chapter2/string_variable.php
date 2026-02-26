<?php
// 変数を使った文字列の連結方法と変数展開
$x = 'Hello';
$y = 'RUNTEQ';
echo $x . ' ' . $y  . PHP_EOL;
echo "$x $y" . PHP_EOL;
echo '$x $y' . PHP_EOL;

// 定数
const PI = 3.14159;
const TAX_RATE = 0.08;

echo PI . PHP_EOL;
echo TAX_RATE . PHP_EOL;