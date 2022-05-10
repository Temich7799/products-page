<?php
include '../header.php';
include '../../classes/Query/DeleteProducts.php';

if (isset($_POST)) {
    $query = new DeleteProducts();
    $query->makeQuery(json_decode(file_get_contents('php://input'), true));
}
