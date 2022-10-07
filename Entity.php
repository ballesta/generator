<?php

class Entity
{
    public Domain $parent;
    public String $name;
    public String $plural_name;
    
    public $attributes = [];

    public function __construct
        (String $name,
         String $plural_name = "")
    {
        echo "Create Entity: $name \n";
        $this->name = $name;
        if ($plural_name == "")
            // Plural name not given: just add an 's'
            $this->plural_name   = $name . "s";
    }

    public function display()
    {
        echo "3:        Entity $this->name \n";
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
    
    public function text(String $name,  $length)
    {   
        $t = new Text($name, $length);
        // Domain that requested this entity creation
        $t->parent = $this;
        $this->attributes[] = $t;
        return $t;
    }

    // End of entity
    public function end()
    {
        $c = get_class($this). ": " . $this->name;
        echo "end of $c\n"; 
        return $this->parent;
    }
}
