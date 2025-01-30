<?php


require_once("../modules/employee_module.php");
$file = "../storage/employees.json";

$action = $_POST["action"];
//! add
switch ($action) {
  case 'add':
    $data = [
      "name" => $_POST["name"] ? $_POST["name"] : null,
      "email" => $_POST["email"] ? filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) : null,
      "salary" => $_POST["salary"] ?? null,
      "gender" => $_POST["gender"] ?? null,
      "password" => $_POST["password"] ? password_hash($_POST["password"], null) : null
    ];
    if(in_array(null,$data,true)||!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
      echo  "error";
      return false;
    }
   echo addEmployee( $file, $data);

    break;
  case 'list':
    # code...
    break;

  default:
    # code...
    break;
}
//? data
//? password_hash

//  name
//  email 
//  salary 
//  gender ('Male', 'Female') 
//  password

//! list
//! update
//? index 
//?  Invalid index provided
//? updatedData 
//! delete
//? index 
//? index 








?>