<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduceText() {
        return "私の名前は{$this->name}です。{$this->age}才です。";
    }
}

class Employee extends Person {
    public function jobText() {
        return "私は社員です。";
    }
}

$employee = new Employee("太郎", 30);
echo $employee->introduceText() . "\n";
echo $employee->jobText() . "\n";