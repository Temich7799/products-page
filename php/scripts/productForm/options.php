<?php
include '../header.php';

spl_autoload_register(function ($className) {
    include_once '../../classes/ProductForm/Form/' . $className . '.php';
});

if (isset($_POST)) {
    print(json_encode(Type::getOptions()));
}