<?php
//accounts - contacts relation hook
 $hook_array['before_save'][] = Array(
        1, 
        'Custom Logic', 
        'custom/modules/Accounts/update_hook.php', 
        'update_related_class', 
        'update_contacts'
    );