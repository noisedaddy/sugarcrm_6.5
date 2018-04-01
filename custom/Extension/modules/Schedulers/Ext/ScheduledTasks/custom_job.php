<?php

   array_push($job_strings, 'custom_job');
   
    function custom_job(){
        
        //For testing util function
        if (function_exists('word_count'))
            $w = word_count("one two three");  //or add an argument a number
        else 
            $w = 'func not exists';
        file_put_contents('sugarcrm.log', "I'm a ScheduledTask".$w, FILE_APPEND);
        return true;
    }