<?php

class NewClass {

    protected $info = 'This is some info';
    static $a;

}

class Pet extends NewClass {

    public function owner() {

        $b = $this->info;
        return $b;

    }

}

class Person {

    private $name;
    private $role;
    private $age;

    public function __construct($name, $role, $age)
    {
     
        $this->name = $name;
        $this->role = $role;
        $this->age = $age;

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

}

