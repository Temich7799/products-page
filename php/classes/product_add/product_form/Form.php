<?php

class Form
{
    protected $inputs = [];
    protected $type;

    function __construct($inputs = [])
    {
        $this->inputs = $inputs;
    }

    function checkPrimaryInputs($inputsFromPOST)
    {
        $i = 0;
        foreach ($inputsFromPOST as $key => $value) {   //Checking received data with initial in cycle
            $name = strtolower($this->inputs[$i]['name']);
            $pattern = $this->inputs[$i]['forValidate']['pattern'];
            if (stristr($name, ' ')) $name = strtolower(strstr($name, ' ', true));
            if ($name != $key || !preg_match('/' . $pattern . '+/i', $value)) {
                print('Error: Invalid data type');
                return false;
            }
            $i++;
            if ($i == count($inputsFromPOST) - 2) break;
        }
        return true;
    }

    function checkTypeInputs($attributesFromPOST)
    {
        $attributes = json_decode($attributesFromPOST);
        $i = 0;
        foreach ($attributes as $attribute) { //Checking received data with initial in cycle
            $k = 0;
            $pattern = $this->type->getAttributes()[$i]['inputs'][$k]['forValidate']['pattern'];
            foreach ($attribute[1] as $key => $value) {
                if (!preg_match('/' . $pattern . '+/i', $value)) {
                    print('Error: Invalid data type');
                    return false;
                }
                $k++;
            }
            $i++;
        }
        return true;
    }

    function getPrimaryInputs(): void
    {
        $result = [];
        foreach ($this->inputs as $input) {
            array_push($result, $input->getInput());
        }
        print(json_encode($result));
    }

    function setType($type): void
    {
        $this->type = $type;
    }

    function getType($typeFromPOST): void
    {
        include strtolower($typeFromPOST) . '.php';
        print(json_encode($type->getType()));
    }
}
