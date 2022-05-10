<?php
include '../header.php';

spl_autoload_register(function ($className) {
    include_once '../../classes/ProductForm/Form/' . $className . '.php';
});

$primaryInputs = new PrimaryInputs(
    [
        $sku = new Input('SKU', 'Any numbers and symbols of the Latin alphabet', 'text', 0, 25, '[A-Za-z0-9]+', 'This field cannot contain special chars like !?@#$%^&* etc'),
        $name = new Input('Name', 'Only symbols of the Latin alphabet', 'text', 0, 25, "[A-Za-z0-9]+", 'The name must be specified without any chars other than alphabetic characters!'),
        $price = new Input('Price $', 'Cost without any chars', 'number', 0, 100000, "[0-9]+", 'The price cannot contain any symbols!'),
    ]
);

if (isset($_POST)) {
    print(json_encode($primaryInputs->getArray()));
}
