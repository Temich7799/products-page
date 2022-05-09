<?php
require('Connect.php');

class Query
{
    private $result;

    function __construct($sql, $isMulti = false)
    {
        $connect = new Connect;
        $link = $connect->getDatabase();

        if ($isMulti) $this->setResult(mysqli_multi_query($link, $sql)); 
        else $this->setResult(mysqli_query($link, $sql));
    }

    function getResult() { return $this->result; }

    private function setResult($result) { $this->result = $result; }
}
