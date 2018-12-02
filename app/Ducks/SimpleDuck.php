<?php

namespace App\Ducks;

use App\Traits\JetFlyTrait;
use App\Traits\SimpleFlyTrait;

use App\Traits\SimpleQuackTrait;

class SimpleDuck
{
    use SimpleQuackTrait;
    use SimpleFlyTrait;
}
