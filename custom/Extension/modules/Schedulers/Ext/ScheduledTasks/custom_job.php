<?php

   array_push($job_strings, 'custom_job');
    function custom_job()
    {
        if (function_exists('word_count'))
            $w = word_count(0);  
        else 
            $w = 'func not exists';
        file_put_contents('sugarcrm.log', "I'm a ScheduledTask".$w, FILE_APPEND);
        return true;
    }