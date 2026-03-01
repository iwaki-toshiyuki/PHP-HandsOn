<?php


trait Greeting {
    // php 8.2以降で定数も定義可能(現在php 8.1なので、エラーになる)
    const HELLO = "Hello!";

    public function hello() {
        return self::HELLO;
    }
}

class Person {
    use Greeting;
}

// 静的メソッドの呼び出し
$person = new Person();
echo $person->hello() . "\n";
echo Person::HELLO . "\n";