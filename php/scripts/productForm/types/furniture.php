<?php

//---------------------------Create Dimensions Attributes---------------------------------------
$inputH = new Input('Height (CM)', 'e.g. 34', 'number', 0, 1000, '[0-9]+', 'This fields must contains only numbers!'); //create input for "Height"
$inputW = new Input('Width (CM)', 'e.g. 65', 'number', 0, 1000, '[0-9]+', 'This fields must contains only numbers!'); //create input for "Width"
$inputL = new Input('Length (CM)', 'e.g. 23', 'number', 0, 1000, '[0-9]+', 'This fields must contains only numbers!'); //create input for "Length"
$dimensionsAttr = new Attributes(
    'Dimensions',
    'Please enter the required dimensions in CM',
    'Cm',
    [
        $inputH->getArray(),
        $inputW->getArray(),       //adding inputs to Attributes
        $inputL->getArray(),
    ]
);
//-----------------------------------------------------------------------------

$type = new Type(
    'Furniture',
    [
        $dimensionsAttr->getArray()
    ]
);
