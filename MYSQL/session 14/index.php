<?php
//! views
//! If , comments  
//! Index  ( clustered , non clustered )
//! Steps For ( Sql Query Execution ) 
    //? Parse the Query
    //? Create Execution Plan
    //? Use Indexes
    //? Run the Operations
    //? Sort and Group
    //? Return the Result

//! Blog App
  //? Users Module  // first name , last name , age , email, password 
  //? Posts Module  // title , content , user_id ,date, image  (likes ,comments)
  //? likes  post_id user_id 
  //? comments  post_id user_id  comment, date 
  //? likes_comment comment_id,  ,user_id


  //? Login 
  //? Logout 
  
  //? Upload files 



  var_dump($_GET["page"]);
  switch ($_GET["page"]) {
    case 'home':
        include "./pages/Home.php";
        break;
    
    default:
        # code...
        break;
  }


