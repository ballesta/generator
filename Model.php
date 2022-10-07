<?php

class Model 
{
    public $parent;
    public $name = "";
    public Set $domains;

    public function __construct($name)
    {
        $this->name = $name;
        $this->domains = new Set("Domains","Domain"); 
    }

    public function display()
    {
        $level = 0;
        echo "$level: Model $this->name \n";
        foreach ($this->domains->elements as $d)
        {
            $d->display();
        }
        return $this;
    }

    public function domain($name)
    {
        // Create new domain $d
        $d = new Domain($name);
        // Model that requested this domain creation
        $d->parent = $this;
        // Add it to current model domains
        $this->domains->add_element($d);
        // Returns just created domain $d 
        return $d;
    }
   
    // End of model
   public function end()
   {
       return $this->parent;
   }
}

