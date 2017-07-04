<?php

class afterSaveContacts
{
    public function callAfterSave($bean, $event, $arguments)
    {
        $GLOBALS['log']->debug('afterSaveContacts->callAfterSave() for id '.$bean->id);
    }
}
