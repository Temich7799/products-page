<?php
include '../header.php';

spl_autoload_register(function ($className) {
    include_once '../../classes/ProductForm/Form/' . $className . '.php';
});

if (isset($_POST['type'])) {
    include './types/' . strtolower($_POST['type']) . '.php'; //Connecting type file from 'types'
    print(json_encode($type->getArray()));
}
