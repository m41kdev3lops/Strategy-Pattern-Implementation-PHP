<?php

require 'vendor/autoload.php';

use App\Duck;

print("----- \n");
$simpleDuck = new Duck("simple");
$simpleDuck->fly();
$simpleDuck->quack();

print("----- \n");

$rubberDuck = new Duck("rubber");
$rubberDuck->fly();
$rubberDuck->quack();

print("----- \n");
