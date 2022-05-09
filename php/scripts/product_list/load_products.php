<?php
include '../header.php';

include '../../classes/Query.php';

if (isset($_POST)) {
    $query = new Query("SELECT * FROM `products` ORDER BY `ID` ASC");
    $products = [];
    while ($row = mysqli_fetch_array($query->getResult(), MYSQLI_ASSOC)) {
        if ($row["ATTRIBUTES"]) $row["ATTRIBUTES"] = json_decode($row["ATTRIBUTES"]);
        $products[] = $row;
    }

    print(json_encode($products));
}
