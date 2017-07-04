<?php

class beforeRelationshipDelete
{
    public function callBeforeRelationshipDelete($bean, $event, $arguments)
    {
        $GLOBALS['log']->debug('beforeRelationshipDelete->callBeforeRelationshipDelete() for id '.$bean->id);
        $GLOBALS['log']->debug('beforeRelationshipDelete->callBeforeRelationshipDelete() with arguments '.print_r($arguments, true));
    }
}
