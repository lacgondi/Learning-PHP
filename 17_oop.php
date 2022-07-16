<?php

use function PHPSTORM_META\type;

class User
{
    public $name;
    public $email;
    public $password;
    //Constructor
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //Methods
    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

$user1 = new User('László', 'laszlo.zsolt.gondi@gmail.com', '123');
$user2 = new User('Chad', 'chad@gchadmail.com', 'gigachad');

// echo $user1->email;
// echo $user2->getName();

//Inheritance
class Employee extends User
{
    public $title;

    public function __construct($name, $email, $password, $title)
    {
        //Use the contructor from the parent class
        parent::__construct($name, $email, $password);
        //for the title in this class
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '1234', 'Manager');

echo $employee1->getTitle();
