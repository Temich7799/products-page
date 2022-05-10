<?php

//---------------------------Create Size Attributes---------------------------------------
$weightInput = new Input('Weight (KG)', 'e.g. 2', 'number', 0, 10000, '[0-9]+', 'This fields must contains only numbers!'); //create input field for "Weight"
$weightAttr = new Attributes(
    'Weight',
    'Please enter the required book Weight in KG',
    'Kg',
    [
        $weightInput->getArray()  //adding to the Attributes
    ]
);
//-----------------------------------------------------------------------------

$type = new Type(
    'Book',
    [
        $weightAttr->getArray() //Adding weight attributes to Type
    ]
);
