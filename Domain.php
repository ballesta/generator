<?php

class Domain
{
    public $parent;

    // Entities of this domains
    public $entities = [];

    // Make new Domain
    public function __construct($name)
    {

        // Name of domain
        $this->name = $name;
    }

    public function display()
    {
        echo "2:    Domain $this->name \n";
        foreach ($this->entities as $e)
        {
            $e->display();
        }
        return $this;
    }

    // Add Entity in Model
    public function entity($name)
    {
        $e = new Entity($name);
        // Domain that requested this entity creation
        $e->parent = $this;
        $this->entities[] = $e;
        return $e;
    }

    // End of domain
    public function end()
    {
        return $this->parent;
    }

}
