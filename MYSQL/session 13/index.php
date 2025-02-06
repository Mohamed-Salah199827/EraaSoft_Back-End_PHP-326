<?php

$host = "localhost";
$username = "root";
$password = "";
$dbName = "session_2_326";
$con = mysqli_connect($host, $username, $password, $dbName);
// var_dump($con);

$sql = "SELECT * FROM courses";
// $res= mysqli_query($con,$sql);

// $data= mysqli_fetch_all($res);
//!Aggregate Functions
//? COUNT
$sql = "SELECT COUNT(*) AS num_of_courses FROM courses";

//   $res= mysqli_query($con,$sql);

//   $data= mysqli_fetch_assoc($res);
// echo "<pre>";  
// var_dump( $data);
// echo "</pre>";  

//? SUM
$sql = "SELECT SUM(salary) AS T_salary FROM users WHERE salary > 9000;";
//    $res= mysqli_query($con,$sql);

//    $data= mysqli_fetch_assoc($res);
//  echo "<pre>";  
//  var_dump( $data);
//  echo "</pre>";  

//? AVG
$sql = "SELECT AVG(salary) FROM users;";
//   $res= mysqli_query($con,$sql);

//   $data= mysqli_fetch_assoc($res);
// echo "<pre>";  
// var_dump( $data);
// echo "</pre>"; 
//? MAX
$sql = "SELECT MAX(salary) FROM users;";
//   $res= mysqli_query($con,$sql);

//   $data= mysqli_fetch_assoc($res);
// echo "<pre>";  
// var_dump( $data);
// echo "</pre>"; 
//? MIN
$sql = "SELECT MIN(age) FROM users;";
//     $res= mysqli_query($con,$sql);

//   $data= mysqli_fetch_assoc($res);
// echo "<pre>";  
// var_dump( $data);
// echo "</pre>"; 

function select($sql)
{
    global $con;
    $res = mysqli_query($con, $sql);
    $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo "<pre>";
    var_dump($data);
    echo "</pre>";


}

//! GROUP BY
$sql = "SELECT department, COUNT(*) AS num_users FROM users GROUP BY department;";
// select($sql);
//! HAVING 
$sql = "SELECT department, COUNT(*) FROM users GROUP BY department HAVING COUNT(*) > 3;";
//! LIKE 
//? a% start
$sql = "SELECT * FROM users WHERE name LIKE 'm%'";

//? %a% any
$sql = "SELECT * FROM users WHERE name LIKE '%e%'";
// select($sql);

//!  WHERE IN
$sql = "SELECT * FROM users WHERE department IN ('IT', 'HR', 'admin','frontend');";
// select(sql: $sql);
//!  BETWEEN AND
$sql = "SELECT * FROM users WHERE salary BETWEEN 3000 AND 25000;";
// select(sql: $sql);

$sql="SELECT AVG(salary) FROM users";
select($sql);

// die;
//!  SUBQUERY 
$sql = "SELECT name,salary FROM users WHERE salary > (SELECT AVG(salary) FROM users)";
select(sql: $sql);






// JOIN
$sql = "SELECT students.name AS student_name, courses.course_name FROM enrollments
        JOIN students ON enrollments.student_id = students.id
        JOIN courses ON enrollments.course_id   = courses.id";

// select($sql);
