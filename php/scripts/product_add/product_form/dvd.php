<?php

spl_autoload_register(function ($className) {
    include_once '../../../classes/product_add/product_form/' . $className . '.php';
});

//---------------------------Create Size Attributes---------------------------------------
$sizeInput = new Input('Size (MB)', 'Provide in Mb', 'number', 0, 10000, '[0-9]+', 'This fields must contains only numbers!'); //create input field for "Size"
$sizeAttr = new Attributes(
    'Size',
    'Please enter the required device size in MB',
    'Mb',
    [
        $sizeInput->getInput()  //adding to the Attributes
    ]
);
//-----------------------------------------------------------------------------

$type = new Type(
    'DVD',
    [
        $sizeAttr->getAttributes() //Adding size attributes to Type
    ]
);
