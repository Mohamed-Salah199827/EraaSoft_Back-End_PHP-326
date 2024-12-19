<?php

//! Back End Fundamentals & Installations 
//! How to write php code and where  
//! php and html , css  
//! Variables 
//! Constants
//! Data Types
   //? String    
   //? Number  
   //? Boolean    
   //? array    
//! type casting  
   //?  integer (int)
   //?  Boolean (bool)
   //?  Float (float)
//! type juggling 

   //? Loosely Typed
//! How to deal with errors
//! Strings 
   //? Heredoc ""
   //? nowdoc  ''
   //? Strings functions 

    //Todo  strlen
   //   echo strlen($text);
    //Todo  str_word_count
   //   echo str_word_count($text);
    //Todo  strpos
   //  echo strpos( $text,"h");
//!----------------------------------------------------------!----------------------------------------------------------
    //Todo  str_replace

   //  echo str_replace("salah","php",$text);
    //Todo  strtoupper
   //  echo strtoupper($text) ; echo "<br>";
    //Todo  strtolower
   //  echo strtolower($text);
    //Todo   ucfirst
   //  echo ucfirst($text); echo "<br>";
    //Todo   lcfirst
   //  echo lcfirst($text); echo "<br>";
    //Todo   substr
   //  echo substr($text,0,5);
    //Todo   trim
   //  echo  $text ."<br>";
   //  echo trim( $text);
    //Todo   explode []
    $text='<script>
 var test ="test"
console.log(test);
</script>';
    echo "<pre>";
   //  print_r(explode('-',$text));
    echo "<br>";
   //  var_dump(explode('-',$text));
    echo "</pre>";
    //Todo   str_repeat
   //  echo str_repeat($text,5);
    //Todo    htmlspecialchars()
   // echo  htmlspecialchars( $text);




//!  Functions 
  //?  Declare function  
  //?  Parameters   
  //?  Arguments 
//   function sum($sum1,$sum2){
//    echo $sum1+$sum2;
//   }

//   sum(4,4);
//   sum(4,2);
//   sum(2,2);
  
     
  //?  Returned function
//   function sum(){
//    return 5;
//   }
//      function sumVoid(){
//     echo 5;
//    }
//  echo  sum()+5;
//  echo "<br>";
//  sumVoid();

 
//!  Operators  
    //?  Arithmetic operators  
    $sum1=2; 
    $sum2=2; 
      //todo Addition (+) 
// echo $sum1+$sum2."<br>";
//todo Subtraction  (-)  
// echo $sum1-$sum2."<br>";
//todo Multiplication  (*)  
// echo $sum1*$sum2."<br>";
//todo Division  (/)  
// echo $sum1/$sum2."<br>";
//todo Modulus  (%)  
// echo $sum1%$sum2."<br>";
    //?  String operators      
           //todo  Concatenation   (.)  

         //   $firstName="mohamed";
         //   $lastName="salah";

         //   echo $firstName . " " .$lastName;
         // echo "$firstName $lastName";
           ;

//!  Conditions (if)
// if($age>=18){
   // echo "true";
   // }else{
//    echo "false";
// }


// $age=2;
// if($age==18){
//    echo "18";
// } else if($age==22){
//    echo "22";

// }else{
//    echo "false";
// }

    //?  Logical operators     
         //todo  Logical AND  (&&)  
         $name="mohame";
         // if($age>=18&&$name=="mohamed"){ // true && false
         //    echo "login";
         // }
         //todo  Logical OR   (||) 
         // if($age>=18||$name=="mohamed"){ // true || false
         //    echo "login";
         // } 
         //todo  Logical NOT  (!)  
         // if($age!=18){ // true || false
         //    echo "login";
         // } 
    //?  Conditional operators     
         //todo   Conditional  (? :)  
// $res="";
//          $age==18 ? $res="true" : $res="false";
//          echo $res;
    //?  comparison operators

         //todo   Equal (==)
         // $age=15;
// if($age=="15"){
//   echo "true";
// }
         //todo   Identical (equal and same type) (===)
         // if($age==="15"){
         //    echo "true";
         //  }
         //todo   Not equal (!= or <> )
         //todo   Not identical (!==)
         //todo   Less than (<)
         //todo   Greater than (>)
         //todo   Less than or equal to (<=)
         //todo   Greater than or equal to (>=)
         
    //?  Increment and decrement operators      
         //todo  ++$a : Pre-increment (increments $a by 1, then returns $a)
         //todo $a++ : Post-increment (returns $a, then increments $a by 1)
         //todo --$a : Pre-decrement (decrements $a by 1, then returns $a)
         //todo $a-- : Post-decrement (returns $a, then decrements $a by 1)

         // $a=0;
         // echo ++$a;
         // echo $a++;
         // echo --$a;
         // echo $a--;
         







function calc($num1,$opr,$num2){

if($opr==="+"){
   echo $num1 + $num2;
}else if($opr==="-"){
   echo $num1 - $num2;
}else if ($opr==="*"){
   echo $num1 * $num2;
}else if ($opr==="/"){
   echo $num1 / $num2;
}else{
   echo "Enter (+,-,/,*)";
}
}
calc(5,"/",5);



?>