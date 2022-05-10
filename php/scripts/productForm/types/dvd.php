<?php

spl_autoload_register(function ($className) {
    include_once '../../classes/ProductForm/Form/' . $className . '.php';
});

//---------------------------Create Size Attributes---------------------------------------
$sizeInput = new Input('Size (MB)', 'e.g. 776', 'number', 0, 10000, '[0-9]+', 'This fields must contains only numbers!'); //create input field for "Size"
$sizeAttr = new Attributes(
    'Size',
    'Please enter the required device size in MB',
    'Mb',
    [
        $sizeInput->getArray()  //adding to the Attributes
    ]
);
//-----------------------------------------------------------------------------

$type = new Type(
    'DVD',
    [
        $sizeAttr->getArray() //Adding size attributes to Type
    ]
);