<?php

include "dsl_trait.php";

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
        ->entity("role")
    ->domain("Sales")
        ->entity("category", "categories")
        ->entity("product")
            //->text("code", 10 )  //->end()
            //->text("name", 40 )  //->end()
            ->attribute("price") 
        ->entity("order")
        ->entity("order_lines", "orders_lines")
        ->entity("customer")
    ->display()
;
