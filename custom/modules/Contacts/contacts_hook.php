<?php

  //prevents directly accessing this file from a web browser
    if(!defined('sugarEntry') ||!sugarEntry) die('Not A Valid Entry Point');
    class add_name_class{
        function add_name_method(& $focus, $event, $arguments){
            $focus->first_name .= "(this is appended)";
        }
    }