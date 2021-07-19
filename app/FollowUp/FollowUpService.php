<?php

namespace App\FollowUp;

use Illuminate\Support\Facades\Facade;

class FollowUpService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'followup';
    }
}
