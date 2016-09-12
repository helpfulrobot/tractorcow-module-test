<?php

use SilverStripe\ORM\DataObject;

class MyModel extends DataObject
{
    private static $db = [
        'Title' => 'Varchar',
        'Description' => 'Text',
    ];
}
