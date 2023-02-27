

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

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

// Instance of the Person class
$person = new Person();
$person->setName($name);
$person->setEmail($email);

// Now using the getName() and getEmail() methods to display the properties
echo "<p>Name: <b>{$person->getName()}</b></p>";
echo "<p>Email: <b>{$person->getEmail()}</b></p>";

}