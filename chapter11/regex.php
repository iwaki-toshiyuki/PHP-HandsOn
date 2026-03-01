<?php
// 正規表現の例
$pattern = '/PHP/';

if (preg_match($pattern, "PHP")) {
    echo "PHP\n";
}
if (preg_match($pattern, "Python")) {
    echo "Python\n";
}