<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input placeholder="name" type="text"         name="name" id="">
        <input placeholder="email" type="email"       name="email" id="">
        <input placeholder="password" type="password" name="password" id="">
        <button>login</button>
    </form>
</body>


<?php 


if ($_SERVER["REQUEST_METHOD"]=="POST") {
echo $_POST["name"]."<br>";
echo $_POST["email"]."<br>";
echo $_POST["password"]."<br>";
}



?>
</html>