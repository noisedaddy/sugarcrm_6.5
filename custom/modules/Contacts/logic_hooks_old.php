<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
// $hook_version = 1; 
//$hook_array = Array(); 
//// position, file, function 
//$hook_array['before_save'] = Array(); 
//$hook_array['before_save'][] = Array(1, 'Contacts push feed', 'modules/Contacts/SugarFeeds/ContactFeed.php','ContactFeed', 'pushFeed'); 
//$hook_array['after_ui_frame'] = Array(); 
//$hook_array['after_ui_frame'][] = Array(1, 'Contacts InsideView frame', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook', 'showFrame'); 
   //prevents directly accessing this file from a web browser
    if (!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');
    // Do not store anything in this file that is not part of the array or the hook version. This file will
    // be automatically rebuilt in the future.
    $hook_version = 1;
    $hook_array = array();
    $hook_array['before_save'] = array();
    $hook_array['before_save'][] = array(1, 'add_to_description', 'custom/modules/Contacts/add_to_description.php', 'add_to_description', 'add_timestamp');
?>