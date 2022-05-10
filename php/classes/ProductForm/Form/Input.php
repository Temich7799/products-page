<?php

class Input
{
    private $inputName = '';
    private $placeHolder = '';
    private $type = 'text';
    private $min = 0;
    private $max = 10000;

    private $pattern = [];
    private $warningMessage = '';

    function __construct($inputName, $placeHolder, $type, $min = 0, $max = 10000, $pattern = '', $warningMessage = '')
    {
        $this->inputName = $inputName;
        $this->placeHolder = $placeHolder;
        $this->type = $type;
        $this->minChar = $min;
        $this->maxChar = $max;

        $this->pattern = $pattern;
        $this->warningMessage = $warningMessage;
    }

    function getArray()
    {
        $result = [
            'forValidate' => ['warningMessage' => $this->warningMessage, 'pattern' => $this->pattern],
            'name' => $this->inputName,
            'placeholder' => $this->placeHolder,
            'type' => $this->type,
        ];

        if ($this->type == 'number') {
            $result['min'] = strlen(strval($this->min));
            $result['max'] = strlen(strval($this->max));
            $result['mode'] = 'numeric';
            return $result;
        }

        if ($this->type == 'text') {
            $result['min'] = $this->min;
            $result['max'] = $this->max;
            $result['mode'] = 'verbatim';
            return $result;
        }
    }
}
