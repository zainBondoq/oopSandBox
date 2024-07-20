<?php

class User {
    
    public $name;
    public $age;    


    //runs when the obj is created!!
public function __construct($name , $age){

    //__CLASS__ ==> RETURNS THE NAME OF THE CLASS IM STANDING IN !
    echo __CLASS__ . '  class <br>';
    $this->name = $name;
    $this->age = $age;
}



//called when no other refrences to a certain obj
//used for cleanup, closing connections ,etc..
public function __destruct(){
    echo 'destruct...';
}



    public function sayHello(){
        return 'Name : ' . $this->name . ' , '.'age : ' . $this->age . 'says hello' ;
    }
}

$user1 = new User('zainBondoq' , 21);


echo $user1->name . ' is ' . $user1->age . ' years old <br>';
