<?php
//! Connect to the database
//! MySQLi (MySQL Improved)


// host 
$host = "localhost";
// username 
$username = "root";
// password
$password = "";
// database 
$database = "blog_sys";
// mysqli_connect
// $con = mysqli_connect($host, $username, $password, $database);

// $SQL = "SELECT * FROM blogs";
// mysqli_query
// $res = mysqli_query($con, $SQL);
// mysqli_num_rows
// var_dump (mysqli_num_rows($data));

// if (mysqli_num_rows($res) > 0) {
// mysqli_fetch_assoc
// $data= mysqli_fetch_assoc($res);
// $data2= mysqli_fetch_assoc($res);
// $data3= mysqli_fetch_assoc($res);
// var_dump($data);
// var_dump($data2);
// var_dump($data3);
//     $blogs = [];
//     while ($row = mysqli_fetch_assoc($res)) {
// echo "title ". $row['title']."<br>";
// echo "sm title ". $row['sm_title']."<br>";
// echo "desc ".$row['de_sc']."<br>";

//         $blogs[] = $row;
//     }

//     echo "<pre>";
//     var_dump(value: $blogs);
//     echo "</pre>";

// } else {
//     echo "No data found";
// }
// mysqli_close($con);
// mysqli_close




$con = mysqli_connect($host, $username, $password, $database);


$SQL = "SELECT * FROM blogs";
$res = mysqli_query($con, $SQL);


if (mysqli_num_rows($res) > 0) {
    // mysqli_fetch_all
    $blogs = mysqli_fetch_all($res, MYSQLI_ASSOC);
    var_dump($blogs);
} else {
    echo "No data found";
}
mysqli_close($con);
// MYSQLI_ASSOC

// mysqli_connect_error

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>sm_title</th>
                <th>desc</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog): ?>
            <tr>
                <td><?php echo $blog["id"] ?></td>
                <td><?php echo $blog["title"] ?></td>
                <td><?php echo $blog["sm_title"] ?></td>
                <td><?php echo $blog["de_sc"] ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</body>

</html> 