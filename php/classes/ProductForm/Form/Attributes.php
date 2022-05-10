<?php

class Attributes
{
    private $title = '';
    private $description = '';
    private $unit = '';
    private $inputs = [];

    function __construct($title, $description, $unit, $inputs = [])
    {
        $this->title = $title;
        $this->description = $description;
        $this->unit = $unit;
        $this->inputs = $inputs;
    }

    function getArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'unit' => $this->unit,
            'inputs' => $this->inputs
        ];
    }
}
