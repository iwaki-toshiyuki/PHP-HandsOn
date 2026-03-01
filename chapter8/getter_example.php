<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }
}

$person = new Person("太郎", 30);
echo $person->getName() . "\n";
echo $person->getAge() . "\n";