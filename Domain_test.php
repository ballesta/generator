<?php
include 'Model.php';
include 'Domain.php';
include 'Entity.php';
include 'Attribute.php';

echo "Test models\n";
$m = new Model("test model");
$m
    ->domain("Authentication")
        ->entity("user")
        ->end()    
        ->entity("role")
        ->end()
    ->end()        
    ->domain("Sales")
        ->entity("category", "categories")
        ->end()    
        ->entity("product")
            ->attribute("code" ) ->end()
            ->attribute("name" ) ->end()
            ->attribute("price") ->end()
        ->end()    
        ->entity("order")
        ->end()    
        ->entity("order_lines", "orders_lines")
        ->end()    
        ->entity("customer")
        ->end()    
    ->end() 
    ->display()
->end(); 

