<?php
// デフォルト引数を持つ関数の例
function greet($name = "Guest") {
    echo "Hello, $name!\n";
}

greet("Alice");
greet();