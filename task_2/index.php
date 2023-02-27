<?php

class Person{
    
    // Properties
    public $name;
    public $email;

    // Methods
    public function setName($name){
    $this->name = $name;
    }

    public function setEmail($email){
    $this->email = $email;
    }

    public function getName(){
    return $this->name;
    }

    public function getEmail(){
    return $this->email;
    }
}

// Instance of the Person class
$person = new Person();
$person->setName("Noore Alam Mahin");
$person->setEmail("mahin0w1@gmail.com");

// Now using the getName() and getEmail() methods to display the properties

echo "<p>Name: <b>{$person->getName()}</b></p>";
echo "<p>Email: <b>{$person->getEmail()}</b></p>";

// echo "<p>Email: <b><a href='mailto:{$person->getEmail()}'>{$person->getEmail()}</a></b></p>";