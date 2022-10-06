<?php
// Sets (name must be unique within set)
class Set
{
    // Set name
    public $name = '';
    // Elements in set
    public $elements = [];

    public function __construct($name)
    {
        $this->name = $name;
        echo '    Create ';
        $this->display();
    }

    public function display()
    {
        echo "Set $this->name \n";
    }

    public function add_element($new)
    {
        foreach ($this->elements as $e) 
        {
            if ($new->name == $e->name) 
            {
                echo "*** Error ***: element $new->name already in set \n";                
                return;
            }
        }
        echo "Add element $e->name to Set $this->name \n";
        $this->elements[] = $e;
    }
}
