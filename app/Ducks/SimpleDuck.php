<?php

namespace App\Ducks;

use App\Traits\JetFlyTrait;
use App\Traits\SimpleFlyTrait;
use App\Traits\SimpleQuackTrait;
use App\Interfaces\DuckInterface;

class SimpleDuck implements DuckInterface
{
    use SimpleQuackTrait;
    use SimpleFlyTrait;
}
