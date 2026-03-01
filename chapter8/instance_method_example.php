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

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function introduceText() {
        return "私の名前は{$this->name}です。{$this->age}才です";
    }
}

$tarou = new Person("太郎", 30);
echo $tarou->introduceText() . "\n";

$hanako = new Person("花子", 25);
echo $hanako->introduceText() . "\n";