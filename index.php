<?php

require 'vendor/autoload.php';

use App\Duck;
use App\Ducks\SimpleDuck;
use App\Ducks\RubberDuck;

print("----- \n");
$simpleDuck = new Duck( new SimpleDuck );
$simpleDuck->fly();
$simpleDuck->quack();

print("----- \n");

$rubberDuck = new Duck( new RubberDuck );
$rubberDuck->fly();
$rubberDuck->quack();

print("----- \n");
