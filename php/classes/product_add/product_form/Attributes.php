<?php

class Attributes
{
    protected $title = '';
    protected $description = '';
    protected $unit = '';
    protected $inputs = [];

    function __construct($title, $description, $unit, $inputs = [])
    {
        $this->title = $title;
        $this->description = $description;
        $this->unit = $unit;
        $this->inputs = $inputs;
    }

    function getAttributes()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'unit' => $this->unit,
            'inputs' => $this->inputs
        ];
    }
}
