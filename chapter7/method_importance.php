<?php
// メソッドの概念を示す簡単な例
echo "Hello, Alice!\n";
echo "Hello, Bob!\n";
echo "Hello, Carol!\n";

// メソッドを使って同じ処理を繰り返す
function greet($name) {
    echo "Hello, $name!\n";
}

greet("Alice");
greet("Bob");
greet("Carol");