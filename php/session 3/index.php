<?php
//! Complete Conditions
//? if    
//  $x=10;
//  if ($x>10) {
//   # code...
// }elseif($x==10){
//    # code...
//  }else{

//  }

//  if ($x) return true;
//  elseif($x==22) return false; 
//? switch    



//    function calc($num1,$op,$num2){
//     $res=0;
//     switch ($op) {
//       case '+':
//         $res= $num1+$num2."<br>";
//         break;
//       case '-':
//         $res= $num1-$num2."<br>";
//         break;
//       case '*':
//         $res= $num1*$num2."<br>";
//             break;
//       case '/':
//         $res= $num1/$num2."<br>";
//         break;

//       default:
//       $res= "Enter (+, - , * ,/)";
//         break;
//     }
// return $res;
//    }
//  echo calc(2,"+",2);

//? match    
// $status=404;
// $testMatch=match ($status) {
//  404 => "not found",
//  500 => "server error"
// }
//? ternary operator  
// $x=10;
// $value= $x ? "true": "false";
//? null coalescing operator    
//  $name="mohamed";
//  $name=null;
//  $name ?? "user";

//! isset 
// if(isset($x)){ //false
//   echo "x";
// }

//! empty
// if(empty($x)){ //true
//   echo "x is empty";
// }


// $usernameInput="ahmed";
// $passInput="123456";


// $username="mohamed";
// $pass="123456";


// if($usernameInput==$username&&$passInput==$pass){
//   echo "login";
// }else{
//   echo "error";

// }

//! Arrays 
//? Indexed Arrays   
// $arr = ["mohamed", "salah", 26, 11252, 30000];

//? associative Arrays  
// $user = [
//   "firstName" => "mohamed",
//   "lastName" => "salah",
//   "age" => 26,
//   "salary" => 30000,
//   "NO." => 1010
// ];
// echo $user["firstName"];


//? multi dimensional Arrays   
// $users = [1,2,3,4];
// echo $users[1]["firstName"];

//? Array functions
//todo array_push 

// print_r($users);
// array_push($users,5) ;
// echo "<pre>";
// print_r($users);
// echo "</pre>";
//todo array_pop  
// array_pop($users);
// echo "<pre>";
// print_r($users);
// echo "</pre>";
//todo array_shift  
// array_shift($users);
// echo "<pre>";
// print_r($users);
// echo "</pre>";
//todo array_merge  
// $arr1=[1,2,3];
// $arr2=[4,5,6];
// echo "<pre>";
// print_r( $arr1    );
// print_r( $arr2    );
// $arrMerged=array_merge($arr1,$arr2);
// print_r($arrMerged);
// echo "</pre>";
//! Loops 
// $posts=["post1","post2"];


// echo $posts[0];
// echo $posts[1];


//? For Loop  
$users = [

  [
    "age" => 26,
    "firstName" => "ahmed"
  ],
  [
    "age" => 26,
    "firstName" => "mohamed"
  ],
  [
    "age" => 26,
    "firstName" => "ahmed"
  ],
  [
    "age" => 26,
    "firstName" => "salah"
  ]
];
"name: $firstName , age : $age";


// for ($i=0; $i < count($users); $i++) { 
//   echo $users[$i]."<br>";
// }    
for ($i = 10; $i >= 0; $i--) {
  echo $users[$i] . "<br>";
}    


