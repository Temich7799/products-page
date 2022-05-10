<?php
include 'Query.php';

class LoadProducts extends Query
{
    function makeQuery($data)
    {
        return $this->sendQuery($data, false);
    }

    function fetchQuery($query)
    {
        $products = [];
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            if ($row["ATTRIBUTES"]) $row["ATTRIBUTES"] = json_decode($row["ATTRIBUTES"]);
            $products[] = $row;
        }
        return $products;
    }
}
