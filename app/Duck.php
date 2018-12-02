<?php

namespace App;

use App\Interfaces\FlyInterface;
use App\Interfaces\DuckInterface;
use App\Interfaces\QuackInterface;

class Duck implements FlyInterface, QuackInterface
{
    protected $duck;

    public function __construct( DuckInterface $duck )
    {
        $this->duck = $duck;
    }


    public function fly()
    {
        return $this->duck->fly();
    }


    public function quack()
    {
        return $this->duck->quack();
    }
}
