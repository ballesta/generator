<?php

class Text extends Attribute_
{
    public $parent;
    public int $length;

    public function __construct(String $name, int $length)
    {
        echo "Define attribute within constructor: $name \n";
        parent::__construct($name);
        $this->length = $length;
    }

    public function display()
    {
        echo "4:            Text $this->name $this->length \n";
    }

    public function end()
    {
        return $this->parent;
    }

}
