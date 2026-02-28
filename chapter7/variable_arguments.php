<?php
// 可変長引数を持つ関数の例
function greet(...$names) {
    foreach ($names as $name) {
        echo "Hello, $name!\n";
    }
}

greet("Alice", "Bob", "Carol");