<?php
require_once("database/connection.php");
// var_dump($con);

function selectData($table)
{

    global $con;
    $SQL = "SELECT * FROM $table";
    $res = mysqli_query($con, $SQL);
    

    if (mysqli_num_rows($res) > 0) {
        // mysqli_fetch_all
         return mysqli_fetch_all($res, MYSQLI_ASSOC);
        // var_dump($blogs);
    } else {
        echo "No data found";
    }
}




?>