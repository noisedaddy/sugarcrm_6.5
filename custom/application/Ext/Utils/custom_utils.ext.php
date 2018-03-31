<?php 
 //WARNING: The contents of this file are auto-generated


//require_once('include/utils.php');  
   function word_count($word = '')
    {
       if (is_string($word) && !empty($word)){
           return (int)str_word_count($word);
       } else {
           return 0;
       }
        //logic
    }
?>