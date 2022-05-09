<?php
include '../../header.php';

spl_autoload_register(function ($className) {
    include_once '../../../classes/product_add/product_form/' . $className . '.php';
});

$form = new Form(
    [
        new Input('SKU', 'Any numbers and symbols of the Latin alphabet', 'text', 0, 25, '[A-Za-z0-9]+', 'This field cannot contain special chars like !?@#$%^&* etc'),
        new Input('Name', 'Only symbols of the Latin alphabet', 'text', 0, 25, "[A-Za-z0-9]+", 'The name must be specified without any chars other than alphabetic characters!'),
        new Input('Price $', 'Provide cost of the product without any chars', 'number', 0, 100000, "[0-9]+", 'The price cannot contain any symbols!'),
    ]
);