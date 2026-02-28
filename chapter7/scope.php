<?php
// 変数のスコープを示す例
function greet() {
    $message = "Hello, PHP!";
    echo $message . "\n";
}

greet();
echo $message;