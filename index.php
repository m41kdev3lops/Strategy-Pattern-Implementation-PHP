<?php

require 'vendor/autoload.php';

use App\SimpleDuck;
use App\RubberDuck;

print("Simple Duck \n");
$simpleDuck = new SimpleDuck;
$simpleDuck->fly();
$simpleDuck->quack();

print("\n");

print("Rubber Duck \n");
$rubberDuck = new RubberDuck;
$rubberDuck->fly();
$rubberDuck->quack();
