<?php

namespace App\Ducks;

use App\Traits\JetFlyTrait;
use App\Interfaces\DuckInterface;
use App\Traits\ArtificalQuackTrait;

class RubberDuck implements DuckInterface
{
    use JetFlyTrait;
    use ArtificalQuackTrait;
}
