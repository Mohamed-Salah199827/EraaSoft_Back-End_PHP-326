<?php

//! getFileContent
  //?  file_exists ?
    //? file_get_contents
    function getFileContent($filePath){
        if(!file_exists($filePath)){
            return [];
        }
        return json_decode(file_get_contents($filePath));
    }
  
//! putFileContent
  //? file_put_contents  

  function putFileContent($filePath,$data){
    file_put_contents($filePath,json_encode($data),JSON_PRETTY_PRINT);
  }



?>