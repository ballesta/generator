<?php
// Sets (name must be unique within set)
class Set
{
    // Set name
    public String $name = '';
    public String $type;
    // Elements in set
    public $elements = [];

    public function __construct(String $name, String $type)
    {  
        $this->name = $name;
        $this->type = $type;
    }

    public function display()
    {
        echo "Set $this->name of $this->type \n";
    }

    // Add element to Set.
    // - Check element type
    // - Check not already in Set
    public function add_element($new)
    {
        // Check element type
        $element_type = get_class($new);
        if ($element_type == $this->type)
        {
            // Correct type
            // See if not already in set
            foreach ($this->elements as $e) 
            {
                if ($new->name == $e->name) 
                {
                    die( "*** Error : element $new->name \n"
                       . "            already in set $this->name ***\n");                
                }
            }
        }
        else
        {
            die( "*** Error ***: element class is $element_type should be $this->type \n");                
        }
        
        echo "Add element $new->name to Set $this->name \n";
        $this->elements[] = $new;
    }
}
