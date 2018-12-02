<?php

namespace App;

use App\Duck;
use App\Traits\JetFlyTrait;
use App\Traits\SimpleFlyTrait;

use App\Traits\SimpleQuackTrait;

class SimpleDuck extends Duck
{
    use SimpleQuackTrait;
    use SimpleFlyTrait;
}
