<?php
$pattern = '/PHP/';

// preg_match_all関数を使用して、文字列内のすべてのマッチを取得
preg_match_all($pattern, "PHP", $matches1);
echo json_encode($matches1[0]) . "\n";

preg_match_all($pattern, "PHP PHP", $matches2);
echo json_encode($matches2[0]) . "\n";