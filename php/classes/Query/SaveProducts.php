<?php
include 'Query.php';

class SaveProducts extends Query
{
    function makeQuery($data)
    {
        foreach ($data as $key => $value) {
            $keys[] = '`' . strtoupper($key) . '`';
            $values[] = "'" . ucfirst($value) . "'";
        }
        return $this->sendQuery("INSERT INTO `products` (ID, " . join(', ', $keys) . ") VALUES (NULL, " . join(', ', $values) . ")");
    }
}
