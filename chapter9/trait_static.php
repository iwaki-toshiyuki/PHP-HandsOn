<?php
// トレイトの例
trait Greeting {
    public static function hello() {
        return "Hello!";
    }
}

class Person {
    use Greeting;
}

echo Person::hello() . "\n";