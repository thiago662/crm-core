<?php

namespace App\UnrealizedSaleReason;

use Illuminate\Support\Facades\Facade;

class UnrealizedSaleReasonService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unrealizedsalereason';
    }
}
