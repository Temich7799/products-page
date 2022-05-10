<?php

abstract class Form
{
    abstract function checkInputs($inputsFromPOST);
    abstract function getArray();
}
