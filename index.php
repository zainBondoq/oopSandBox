<?php

class User {
    public $name;
    public $age;    

    public function sayHello(){
        return 'Name : ' . $this->name . ' , '.'age : ' . $this->age . 'says hello' ;
    }
}

$user1 = new User();
$user1->name = 'zain';
$user1->age = '21';
echo $user1->sayHello();

echo '<br>';
$user2 = new User();
$user2->name = 'lujain';
$user2->age = '21';

echo $user2->sayHello();

