<?php
//! Loops 
$arr = [
  [
    "name" => "mohamed",
    "age" => 25
  ],
];
// for ($i = 0; $i < count($arr); $i++) {
// print_r( $arr[$i]["name"]);
// }
//? While Loop  

// $I=10;
//  while ($I <= 10) {
//    $I++;
//    echo $I;

//  }  
//? Do-While Loop   
//  do {
//    echo $I;
//    $I++;
//  } while ($I <= 10); 
//? Foreach Loop
// $users = [
//   0 => ["name" => "mohamed", "phone" => 123124536, "salary" => 25425],
//   1 => ["name" => "mohamed", "phone" => 123124536, "salary" => 25425],
//   2 => ["name" => "mohamed", "phone" => 123124536, "salary" => 25425],
//   3 => ["name" => "mohamed", "phone" => 123124536, "salary" => 25425],
// ];

// output name : mohamed phone : 123124536 salary : 25425 
// for ($i=0; $i < count($users); $i++) { 
//   $user=$users[$i];
//   # code...
// }

// foreach ($users as $key => $user) {
//   echo "<pre>";
//   // echo $key;

//   foreach ($user as $key => $value) {
//     echo "$key : $value ";
//   }
// var_dump($user["name"]);
// var_dump($user["phone"]);
// echo "</pre>";
// }
//todo  continue 
$arr = [1, 2, 3, 4, 5, 6, 7];
foreach ($arr as  $value) {
  continue;
  echo $value . "<br>";
  # code...
}
//todo  break




//! Functions 

//? anonymous function    
// $testFun=function(){

// };
// echo $testFun();

//? closure function

// $x=5;
//todo use ()   
// $sum=function($y) use ($x){
//   return $x+$y;
// };
// echo $sum(y: 5);
//? callback function   

function sayHello($name){
  echo "Hello $name";
}

// function setName($callback,$username){

  // return $callback($username);
  // sayHello('mohamed')
// }


// setName('sayHello',"mohamed");
// function login($num)
// {
//   $num+5;
// }


// function admin()
// {
//   echo "Hi Admin";
// }
// function user()
// {
//   echo "Hi user";
// }

//  login("ahmed");
// else login(user());



//? type hinting  
//todo int    
// function login(int $num)
// {
//   $num+5;
// }
// login("ahmed");
//todo float    
//todo Union (|)  
// function sum(int|float|bool $num){
// return $num+5;
// }   
// echo sum(1.1);
//todo bool    
//todo string    
//todo array     
//todo Null (?)  
// function username(?string $name){
//   if($name==null){
//     echo "Hi user";
//   }else{
//     echo "Hi $name";

//   }
// }
// username(null);
// username("mohamed");
//todo callable     
//todo iterable    

// function getData(iterable $data){

//   foreach ($data as $key => $value) {
//     echo "<pre>";
//     echo $value;
//     echo "</pre>";
//     # code...
//   }
// }
// $users=["mohamed","salah","ahmed"];
// $numbers=[3,2,1];
// getData($users);
// getData($numbers);
// getData(2);
//? global function  
// function t(){
//   $x=15;
// }
// $x=10;  
// function test(){
  //? global keyword    
//   global $x;
// return  $x+10;
// }
// echo test();

//? arrow function   

// $fun= fn($x,$y) => $x +$y;
// echo $fun(2,2);
//! Pass by Value & Pass by Reference (&)   
$x=5;
function sum (&$a){
  return ++$a;
}


echo sum($x);
echo $x;



//! Solve problems 

//? 1. Question 1: Calculate the Average
//? Problem: Write a PHP function that calculates the average of a given array of numbers. 
//? The function should take an array of numbers as input and return the average.

//! Example:
// $numbers = [10, 20, 30, 40];
// Output: 25

//? 2. Question 2: Check for Prime Number
//? Problem: Write a function that checks if a given number is prime. 
//? A prime number is a number that is divisible only by itself and 1.

//! Example:
// isPrime(7);  // Output: true
// isPrime(10); // Output: false

//? 3. Question 3: Reverse a String
//? Problem: Write a function that takes a string as input and returns the string in reverse order.

//! Example:
// reverseString("hello");  // Output: "olleh"

//? 4. Question 4: Count Duplicate Elements
//? Problem: Write a function that counts how many times each element appears in an array.

//! Example:
// $arr = [1, 2, 2, 3, 3, 3, 4];
// Output: [1 => 1, 2 => 2, 3 => 3, 4 => 1]

//? 5. Question 5: Convert Values to Correct Type
//? Problem: Write a function that converts a string value into the correct data type based on its content. 
//? For example:
//? - If the value is "true" or "false", convert it to Boolean.
//? - If the value contains numbers, convert it to Integer or Float.
//? - If the value contains no numbers, convert it to String.

//! Example:
// convertValue("123");      // Output: 123 (Integer)
// convertValue("12.34");    // Output: 12.34 (Float)
// convertValue("true");     // Output: true (Boolean)
// convertValue("hello");    // Output: "hello" (String)