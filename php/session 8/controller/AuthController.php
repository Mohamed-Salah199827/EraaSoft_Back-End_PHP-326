<?php
//! authenticate
require_once("../modules/employee_module.php");
$product=[
   ["title"=>"Fancy Product","price"=>2200],
   ["title"=>"Special Item","price"=>2200],
   ["title"=>"product-1","price"=>2200],
   ["title"=>"product-1","price"=>2200],
   ["title"=>"product-1","price"=>2200]
];



function login()
{
   $file = "../storage/employees.json";
   $email = $_POST["email"];
   $password = $_POST["password"];
   $Employees = listEmployees($file);
   foreach ($Employees as $Employee) {
      //? password_verify
      if ($Employee->email == $email && password_verify($password, $Employee->password)) {
         echo "login";
         return true;
      }
      echo "error";
   }
}

login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   


<?php foreach ($products as $product):  ?>
<div class="card text-start">
   <img class="card-img-top" src="holder.js/100px180/" alt="Title" />
   <div class="card-body">
      <h4 class="card-title">title :<?php echo $product->title  ?></h4>
      <h4 class="card-title">price :<?php echo $product->price  ?></h4>
      <p class="card-text">Body</p>
   </div>
</div>
<?php endforeach; ?>
</body>
</html>