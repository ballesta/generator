<?php

class Attribute_
{
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

    public function end()
    {
        return $this->parent;
    }

    public function __call($method, $args)
    {
        $args_string = implode(", ", $args);
        echo "__call($method, [$args_string]) Failed! \n";
        $parent_class = $this->end();
        $parent_class_name = get_class($parent_class);
        echo "Now in: $parent_class_name\n";
        echo "$args[0] \n"; 
        $parent_class->$method($args[0]);    
        return $parent_class;
    }
}
