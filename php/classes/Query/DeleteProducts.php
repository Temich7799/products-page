<?php
include 'Query.php';

class DeleteProducts extends Query
{
    function makeQuery($data)
    {
        $sql = '';
        foreach ($data as $checked_id) {
            $sql = 'DELETE FROM `products` WHERE `products`.`ID` = ' . $checked_id . '; ' . $sql;
        }
        return $this->sendQuery($sql, true);
    }
}
