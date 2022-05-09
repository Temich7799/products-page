<?php

class Type
{
    protected $typeName = '';
    protected $attributes = [];

    function __construct($typeName, $attributes = [])
    {
        $this->typeName = $typeName;
        $this->attributes = $attributes;
    }

    function getType()
    {
        return
            [
                'name' => $this->typeName,
                'attributes' => $this->attributes
            ];
    }

    function getAttributes()
    {
        return $this->attributes;
    }
}
