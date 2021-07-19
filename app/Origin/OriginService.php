<?php

namespace App\Origin;

use Illuminate\Support\Facades\Facade;

class OriginService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'origin';
    }
}
