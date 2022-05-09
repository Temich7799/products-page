<?php

spl_autoload_register(function ($className) {
    include_once '../../../classes/product_add/product_form/' . $className . '.php';
});

//---------------------------Create Dimensions Attributes---------------------------------------
$inputH = new Input('Height (CM)', 'Provide in Cm', 'number', 0, 1000, '[0-9]+', 'This fields must contains only numbers!'); //create input for "Height"
$inputW = new Input('Width (CM)', 'Provide in Cm', 'number', 0, 1000, '[0-9]+', 'This fields must contains only numbers!'); //create input for "Width"
$inputL = new Input('Length (CM)', 'Provide in Cm', 'number', 0, 1000, '[0-9]+', 'This fields must contains only numbers!'); //create input for "Length"
$dimensionsAttr = new Attributes(
    'Dimensions',
    'Please enter the required dimensions in CM',
    'Cm',
    [
        $inputH->getInput(),
        $inputW->getInput(),       //adding inputs to Attributes
        $inputL->getInput(),
    ]
);
//-----------------------------------------------------------------------------

$type = new Type(
    'Furniture',
    [
        $dimensionsAttr->getAttributes()
    ]
);
