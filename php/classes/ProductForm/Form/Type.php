<?php
include_once 'Form.php';

class Type extends Form
{
    private $typeName = '';
    private $attributes = [];

    function __construct($typeName, $attributes = [])
    {
        $this->typeName = $typeName;
        $this->attributes = $attributes;
    }

    function checkInputs($POST): bool
    {
        $attributes = json_decode($POST['attributes']);
        $i = 0;
        foreach ($attributes as $attribute) {
            $k = 0;
            $pattern = $this->attributes[$i]['inputs'][$k]['forValidate']['pattern'];
            foreach ($attribute[1] as $key => $value) {
                if (!preg_match('/' . $pattern . '+/i', $value)) {
                    //print('Error: Invalid data type');
                    return false;
                }
                $k++;
            }
            $i++;
        }
        return true;
    }

    function getArray(): array
    {
        return
            [
                'name' => $this->typeName,
                'attributes' => $this->attributes
            ];
    }
}
