<?php

class Attribute_
{
    use dsl;

    public $parent;
    public $code;
    public $name;
    public $prompt;

    public function __construct($name)
    {
        echo "Define attribute within constructor: $name \n";
        $this->name = $name;
    }

    public function display()
    {
        echo "4:            Attribute $this->name \n";
    }

}
