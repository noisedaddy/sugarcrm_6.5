<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class update_related_class {

    function update_contacts(& $focus, $event, $arguments) {

        $bean = BeanFactory::getBean('Accounts', $focus->id);
        if ($bean->load_relationship('contacts')) {
            $relatedContacts = $bean->contacts->getBeans();

            foreach ($relatedContacts as $contact) {
                $contactBean = BeanFactory::getBean('Contacts', $contact->id);

                if (!stristr($contactBean->first_name, "(this is related)")) {
                    $contactBean->first_name .= "(this is related)";
                    $contactBean->save();
                }
            }
        }
    }

}
