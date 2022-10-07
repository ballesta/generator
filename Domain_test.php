<?php
include 'Model.php';
include   'Domain.php';
include     'Entity.php';
include       'Attribute.php';
include         'Text.php';
include   'Set.php';

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
            ->text("code", 10 )  ->end()
            ->text("name", 40 )  ->end()
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

