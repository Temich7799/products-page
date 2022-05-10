<?php
include_once 'Form.php';

class PrimaryInputs extends Form
{
    private $inputs = [];

    function __construct($inputs = [])
    {
        $this->inputs = $inputs;
    }

    function checkInputs($POST)
    {
        $i = 0;
        $inputs = $this->getArray();

        foreach ($POST as $key => $value) {
            $input = $inputs[$i];
            $name = strtolower($input['name']);
            $pattern = $input['forValidate']['pattern'];

            if (stristr($name, ' ')) $name = strtolower(strstr($name, ' ', true));
            if ($name != $key || !preg_match('/' . $pattern . '+/i', $value)) {
                //print('Error: Invalid data type');
                return false;
            }

            $i++;
            if ($i == count($POST) - 2) break; //Stop on 'attributes' key
        }
        return true;
    }

    function getArray()
    {
        $result = [];
        foreach ($this->inputs as $input) {
            array_push($result, $input->getArray());
        }
        return $result;
    }
}
