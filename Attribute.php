<?php

class Attribute_
{
    public $parent;
    public $code;
    public $name;
    public $prompt;

    public function __construct($name)
    {
        echo "Define attribute within constructor $name \n";
        $this->name = $name;
    }

    public function display()
    {
        echo "4:            Attribute $this->name \n";
    }

    public function end()
    {
        return $this->parent;
    }
}
