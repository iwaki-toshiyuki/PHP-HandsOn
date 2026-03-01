<?php
// クラスの例
class Person {
    public function greet() {
        return "Hello!";
    }
}

$person = new Person();

// クラスのメソッドを呼び出す
echo $person->greet() . "\n";
