<?php

namespace App\Interest;

use Illuminate\Support\Facades\Facade;

class InterestService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'interest';
    }
}
