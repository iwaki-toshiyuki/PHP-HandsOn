<?php
$pattern = '/PHP/';

// preg_replace関数を使用して、文字列内のマッチを置換
echo preg_replace($pattern, "Python", "PHP") . "\n";
echo preg_replace($pattern, "Python", "PHP PHP") . "\n";