<?php

class Person {
    public string $name;
    public string $hairColor;

    public function __construct($name){ // runs everytime the class person is called
        $this->name = $name;
    }


    public function getName(){

    }

    public static function fetchUsers($apiKey, $key){

    }
}

Person :: fetchUsers(); //calls function without using objects

// $person1 = new Person();
// $person2 = new Person();

$person1 = new Person('David');
$person2 = new Person('Rethabile');


// $person1->getName();
// $person2->fetchUsers();


class DatabaseMysql{
    public function fetchData(){

    }
}

class DatabasePostgress{
    public function fetchData(){
        
    }
}

class User{
    public $database;

    public function __construct($database){ // runs everytime the class person is called

        // $this->database = new DatabaseMysql();
        $this->database = $database;

    }

    public function getUsers(){
        $this->database->fetchData();
    }

}



$database = new DatabasePostgress();
$user = new User($database);
