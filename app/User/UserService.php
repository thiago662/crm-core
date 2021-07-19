<?php

namespace App\User;

use Illuminate\Support\Facades\Facade;

class UserService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'user';
    }
}
