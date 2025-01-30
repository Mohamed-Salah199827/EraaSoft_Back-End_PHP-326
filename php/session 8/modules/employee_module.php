<?php
//! require
//! require_once 
require_once("../helpers/file_handling.php");
$file = "../storage/employees.json";

//! addEmployee (file, data) 
function addEmployee($filePath, $newEmployee)
{
  //? getFileContent
  $Employees = getFileContent($filePath);
  //? add 
  $Employees[] = $newEmployee;
  //? putFileContent
  putFileContent($filePath, $Employees);
  return "Employee added successfully.";
}
//todo Employee added successfully. 


//! listEmployees

function listEmployees($filePath){
 
 $Employees= getFileContent($filePath);
 if(empty($Employees)){
  return [];
 }
  return $Employees; 

}
//! updateEmployee (file, index, updatedData)
//? Employee not found ?
//? updatedData
//todo Employee updated successfully.


//! deleteEmployee (file, index)
//? Employee not found ?
//? unset
//? array_values






?>