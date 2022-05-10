<?php
include '../header.php';
include '../../classes/Query/LoadProducts.php';

if (isset($_POST)) {
    $query = new LoadProducts();
    print(json_encode($query->fetchQuery($query->makeQuery("SELECT * FROM `products` ORDER BY `ID` ASC"))));
}
