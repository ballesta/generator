<?php

class Entity
{
    public Domain $parent;
    public String $singular_name;
    public String $plural_name;
    
    public $attributes = [];

    public function __construct
        (String $singular_name,
         String $plural_name = "")
    {
        $this->singular_name = $singular_name;
        if ($plural_name == "")
            // Plural name not given: just add an 's'
            $this->plural_name   = $singular_name . "s";
    }

    public function display()
    {
        echo "3:        Entity $this->singular_name \n";
        foreach ($this->attributes as $a)
        {
            $a->display();
        }
    }

    public function attribute($name)
    {   
        $a = new Attribute_($name);
        // Domain that requested this entity creation
        $a->parent = $this;
        $this->attributes[] = $a;
        return $a;
    }
    
    // End of entity
    public function end()
    {
        return $this->parent;
    }
}
