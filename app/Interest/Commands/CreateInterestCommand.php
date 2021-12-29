<?php

namespace App\Interest\Commands;

use App\Interest\Interest;

class CreateInterestCommand
{
    public function __invoke(array $param)
    {
        Interest::create($param);
    }
}
