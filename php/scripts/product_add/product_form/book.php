<?php

spl_autoload_register(function ($className) {
    include '../../../classes/product_add/product_form/' . $className . '.php';
});

//---------------------------Create Size Attributes---------------------------------------
$weightInput = new Input('Weight (KG)', 'Provide in Kg', 'number', 0, 10000, '[0-9]+', 'This fields must contains only numbers!'); //create input field for "Weight"
$weightAttr = new Attributes(
    'Weight',
    'Please enter the required book Weight in KG',
    'Kg',
    [
        $weightInput->getInput()  //adding to the Attributes
    ]
);
//-----------------------------------------------------------------------------

$type = new Type(
    'Book',
    [
        $weightAttr->getAttributes() //Adding weight attributes to Type
    ]
);
