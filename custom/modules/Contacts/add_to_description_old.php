<?php

  //prevents directly accessing this file from a web browser
    if(!defined('sugarEntry') ||!sugarEntry) die('Not A Valid Entry Point');
    class add_to_description{
        function add_timestamp(& $focus, $event, $arguments){
            global $current_user;
            $focus->description .= " Saved on". date('Y-m-d g:i a'). " by ". $current_user->user_name;
        }
    }