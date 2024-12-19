<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="number" placeholder="num1" name="num1" id="">
        <input type="text" placeholder="Enter (+,-,*,/)" name="opr" id="">
        <input type="number" placeholder="num2" name="num2" id="">
        <button>calc</button>
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $opr = $_POST["opr"];
    $num2 = $_POST["num2"];


    $res = 0;
    switch ($opr) {
        case '+':
            $res = $num1 + $num2;
            break;
        case '-':
            $res = $num1 - $num2;
            break;
        case '*':
            $res = $num1 * $num2;
            break;
        case '/':
            $res = $num1 / $num2;
            break;

        default:
        $res="Enter (+,*,/,-)";
            break;
    }

    echo $res;
}
?>

</html>