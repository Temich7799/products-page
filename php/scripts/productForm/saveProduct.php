<?php

include '../header.php';
include '../../classes/Query/SaveProducts.php';

if (isset($_POST)) {
    include './primaryInputs.php';
    include './types/' . strtolower($_POST['type']) . '.php'; //Connecting type file from 'types'

    if ($primaryInputs->checkInputs($_POST) && $type->checkInputs($_POST)) {
        $query = new SaveProducts();
        $query->makeQuery($_POST);
    }
}
