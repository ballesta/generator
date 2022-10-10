<?php

trait dsl
{
    public function doc()
    {
        echo "dsl::doc found in trait\n";
    }

    public function __call($method, $args)
        {
            $args_string = implode(", ", $args);
            $method_name = $args[0];
            $class_name = get_class($this);
            echo "__call($method, [$args_string]) from $class_name Failed! \n";
            // Search failed method in current class parents
            $found_failed_method_in_parents = false;
            do { 
                if ($this->parent != null){
                    $parent_class = $this->parent;
                    $parent_class_name = get_class($parent_class);
                    echo "Move to parent class: $parent_class_name $parent_class->name\n";
                    //die();
                    if (method_exists($parent_class,$method_name)){
                        echo "Found method $method_name \n";
                        die();
                        $found_failed_method_in_parents = true;
                    }
                    else
                    {
                        echo "Not Found method $method_name in $parent_class_name \n";
                        die();
                        // Try to see if method exists in higher level class
                        $parent_class = $parent_class->parent;
                    }
                }
                else
                {
                    die("*** Method  $method_name  Not found ***");
                }
            } while (!$found_failed_method_in_parents);
            echo "Now in: $parent_class->name \n";
            // Call the failed method on it's right class 
            return $parent_class->$method_name;    
        }   
}
