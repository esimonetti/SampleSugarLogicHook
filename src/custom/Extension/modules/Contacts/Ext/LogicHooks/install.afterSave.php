<?php

$hook_array['after_save'][] = array(
    1,
    'Contacts after save hook',
    'custom/logichooks/modules/Contacts/afterSaveContacts.php',
    'afterSaveContacts', 
    'callAfterSave'
);
