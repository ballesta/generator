<?php

include 'Set.php';
include 'Entity.php';

echo "Set tests\n";

$s1 = new Set('s1', "Entity");
$user = new Entity ('user');
$role = new Entity ('role');

$s1->add_element($user);

$s1->add_element($role);

$s1->add_element($user);

$s1->display();

$s2 = new Set('s2', "Entity");
echo "End of Set tests\n";
