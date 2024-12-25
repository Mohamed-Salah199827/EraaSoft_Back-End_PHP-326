<?php
$name=$_POST["name"];
$email=$_POST["email"];
$salary=$_POST["salary"];
$gender=$_POST["gender"];
$password=$_POST["password"];

if(isset($name)){
    
    $user=[
        "name"=>$name,
        "email"=>$email,
        "salary"=>$salary,
        "gender"=>$gender,
    "password"=>$password
];

$allData=json_decode(file_get_contents("../database/Employee.json"));

$allData->users;
$allData->users[]=$user;


file_put_contents("../database/Employee.json",json_encode($allData),JSON_PRETTY_PRINT);

}



// file_put_contents("../database/Employee.json",json_encode($user),JSON_PRETTY_PRINT);
// $users=file_get_contents("../database/Employee.json");
// $data=json_decode($users);
// echo "<pre>";
// print_r( $data->users[0]->name);

// echo "</pre>";

// $data->users[]=$user;

//  file_put_contents("../database/Employee.json",json_encode($data),JSON_PRETTY_PRINT);
