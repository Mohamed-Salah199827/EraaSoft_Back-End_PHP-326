<?php
//! Validations & Filters 
//  var_dump($_REQUEST);
//   $inputEmail="mohamed";
//  $inputPassword=$_REQUEST["password"];

//  filter_var
//  $checkEmail= filter_var($inputEmail,filter: FILTER_VALIDATE_EMAIL);
//  if ($checkEmail) {
//  echo "login";
//  }else{
//    echo "error";
//  }
//  var_dump($checkEmail);
//?FILTER_VALIDATE_EMAIL  
//?FILTER_SANITIZE_STRING

//  $hackCode="<h1>mohamed</h1>";
//  echo $hackCode."<br>";
//  $goodCode=filter_var( $hackCode,FILTER_SANITIZE_STRING);
//  var_dump($goodCode);
//todo Filter_input
//?INPUT_GET
// $checkEmail=filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
// var_dump($checkEmail);
//?INPUT_POST
// Filter_input_array 

// filter_input_array( INPUT_GET,$filters);
//?FILTER_VALIDATE_INT  
//?FILTER_VALIDATE_URL  
//?FILTER_VALIDATE_IP  

//  url
//  fName
//  lName
//  email
//  password

// $data = $_POST;


// foreach ($data as $key => $value) {
//   if (strlen($value) <= 0) {

//     echo "Enter $key <br>";
//   } else {
//     if ($key == "password") {
//       if (strlen($value) >= 8) {
//         echo "$key : $value <br>";
//       } else {
//         echo "Enter $key : 8ch <br>";
//       }
//     } else {
//       echo "$key : $value <br>";
//     }
//   }
// }
// if(){

//   $filters = [
//     "url" => FILTER_VALIDATE_URL,
//     "email" => FILTER_VALIDATE_EMAIL
//   ];
  
//   filter_input_array(INPUT_POST, $filters);
// }


//! Sessions & Cookies
//? Cookies
// setcookie("darkMode",true,time()+ 60*60);
// var_dump($_COOKIE);
//? Sessions
//! Implode & Explode 
$str="a-b-c";
$arr=["a","b","c"];
var_dump(explode("-",$str));
echo implode("/",$arr);

//! File_get_content , file_put_content
//? File_get_contents
//? File_put_contents








?>