<?php

$hook_array['before_relationship_delete'][] = array(
    1, 
    'Application before relationship delete hook',
    'custom/logichooks/application/beforeRelationshipDelete.php',
    'beforeRelationshipDelete',
    'callBeforeRelationshipDelete'
);
