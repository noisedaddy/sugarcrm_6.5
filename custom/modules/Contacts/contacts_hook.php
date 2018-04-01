<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class add_name_class {

    function add_name_method(& $focus, $event, $arguments) {

        if (!stristr($focus->first_name, "(this is appended)")) {
            $focus->first_name .= "(this is appended)";
        }        
    }

}
