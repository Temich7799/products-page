<?php
require('Connect.php');

abstract class Query
{
    abstract function makeQuery($data);

    function sendQuery($sql, $isMulti = false)
    {
        $connect = new Connect;
        $link = $connect->getDatabase();

        mysqli_real_escape_string($link, $sql);

        if ($isMulti) return mysqli_multi_query($link, $sql);
        else return mysqli_query($link, $sql);
    }
}