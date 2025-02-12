<?php


//!OOP - Object Oriented Programming
//Class
// class Car
// {
//       //Properties
//       public $color;
//       public $model;
//       public $brand;

//       //Methods
//       public function display()
//       {
//             echo "This is a Car";
//       }
// }
//!object 

// $car1 = new Car();
// $car1->color = "Red";
// $car1->model = "2020";
// $car1->brand = "BMW";

// var_dump($car1);
// echo '<br>';
// echo $car1->color;
// echo '<br>';
// echo $car1->model;
// echo '<br>';
// echo $car1->brand;


//!This Keyword
class Person
{
      public $name;
      public $age;
      public $gender;

      public function hi()
      {
            echo "Hi I'm $this->name";
            $this->hello();
      }

      public function hello()
      {
            echo "Hello";
      }

}

// $person1 = new Person();
// $person1->name = "Mohamed";
// $person1->age = 25;
// $person1->gender="male";

// $person1->hi();

//! OOP Concepts 
//? Inheritance

class Animal
{
      public $name;
      public $color;
      public function sound()
      {
            echo "Meow";
      }
      public function eat()
      {
            echo "Eating";
      }
}

//todo extends
 class Cat extends Animal
 {
     
      public function sound()
      {
            echo "Meow";
      }
 }
//todo extends
 class Dog extends Animal
 {
     
      public function sound()
      {
            echo "Hohoho";
      }
 }

// $cat1 = new Cat();
// $cat1->name = "Tom";
// $cat1->color = "Black";
// $cat1->eat();
// echo '<br>';
// echo $cat1->name;




// //! Access Modifiers
// class Car
// {
//       //? Public
//       //? Protected
//       private $color;

//       //? Private
//       public $model;
//       public $brand;

//       public function display()
//       {
//             echo "This is a Car";
//       }
// }


// class car1 extends Car
// {
//       public function display()
//       {
//             $this->color;
//       }
// }

// $car1 = new Car();
// $car1->color = "Red";


// class User
// {
//       public $name;
//       public $email;
//       private $password;
//       public function setPassword($password, $login)
//       {
//             if ($login == true) {
//                   $this->password = $password;
//             } else {
//                   echo "You can't set password";
//             }
//       }
//       public function getPassword()
//       {
//             return $this->password;
//       }


// }

// $user1 = new User();
// $user1->name = "Mohamed";
// $user1->email = "mo@gmail.com";
// $user1->setPassword("123456");

// echo $user1->getPassword();

// var_dump($user1);

//? Polymorphism
//? Encapsulation
//? Abstraction


