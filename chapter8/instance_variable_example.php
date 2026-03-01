<?php
class Person {
    private $name;
    private int $age;
    private $country;

    public function __construct($name, $age, $country) {
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    public function info() {
        return "{$this->name}, {$this->age}歳, {$this->country}出身";
    }
}

$person = new Person("太郎", 30, "Japan");
var_dump($person);
echo $person->info() . "\n";