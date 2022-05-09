<?php
include '../../header.php';

include_once '../../../classes/product_add/product_form/Form.php';
include '../../../classes/Query.php';

$inputs = $_POST;

if (isset($_POST)) {

    //if ($form->checkPrimaryInputs($inputs) && $form->checkTypeInputs($inputs['attributes'])) { //Final values checking
    foreach ($inputs as $key => $value) {
        $keys[] = '`' . strtoupper($key) . '`';     //Making a query
        $values[] = "'" . ucfirst($value) . "'";
    }
    $query = new Query("INSERT INTO `products` (ID, " . join(', ', $keys) . ") VALUES (NULL, " . join(', ', $values) . ")");
    //}
    var_dump($_POST);
}
