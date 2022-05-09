<?php
include '../header.php';

include '../../classes/Query.php';

if (isset($_POST)) {
    $request_body = file_get_contents('php://input');
    $checked = json_decode($request_body, true);

    $sql = '';

    foreach ($checked as $checked_id) {
        $sql = 'DELETE FROM `products` WHERE `products`.`ID` = ' . $checked_id . '; ' . $sql;
    }

    $query = new Query($sql, true);
}
