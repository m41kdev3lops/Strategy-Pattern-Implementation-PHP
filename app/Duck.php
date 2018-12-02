<?php

namespace App;

use App\Interfaces\FlyInterface;
use App\Interfaces\QuackInterface;

class Duck implements FlyInterface, QuackInterface
{
    protected $availableTypes = ['rubber', 'simple'];
    protected $duck;

    public function __construct( string $type )
    {
        if ( ! in_array($type, $this->availableTypes) ) throw new Exception("{$type} is NOT a valid Duck Type");

        $duckClass = $this->resolveDuckClass($type);

        $this->duck = new $duckClass;
    }


    protected function resolveDuckClass( string $className )
    {
        return "App\\Ducks\\" . ucfirst($className) . "Duck";
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
