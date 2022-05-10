<?php

class Connect
{
    private $host = 'localhost';
    private $user = 'id18779169_admin';
    private $pass = 'h<&u(AM$zay4<&]~';
    private $base = 'id18779169_main';

    function getDatabase()
    {
        $result = mysqli_connect($this->host, $this->user, $this->pass, $this->base);
        //if (!$result) print('Error: ' . mysqli_connect_error());
        return $result;
    }
}

/*
   private $host = 'localhost';
    private $user = 'id18779169_admin';
    private $pass = 'h<&u(AM$zay4<&]~';
    private $base = 'id18779169_main';
*/
