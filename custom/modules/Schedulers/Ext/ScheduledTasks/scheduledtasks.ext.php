<?php 
 //WARNING: The contents of this file are auto-generated



        file_put_contents('/sugarcrm.log', "I'm a ScheduledTask", FILE_APPEND);




   array_push($job_strings, 'custom_job');
    function custom_job()
    {
        if (function_exists('word_count'))
            $w = word_count("adasd adsasd dsadas");  
        else 
            $w = 'func not exists';
        file_put_contents('sugarcrm.log', "I'm a ScheduledTask".$w, FILE_APPEND);
        return true;
    }
?>