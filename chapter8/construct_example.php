<?php
class Person {
    // クラスのプロパティ
    private $name;
    private $age;

    // クラスのコンストラクタ
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // クラスのメソッド
    public function info() {
        return "{$this->name}, {$this->age}歳";
    }
}

$person = new Person("太郎", 30);
var_dump($person);
echo $person->info() . "\n";