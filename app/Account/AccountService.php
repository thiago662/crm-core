<?php

namespace App\Account;

use Illuminate\Support\Facades\Facade;

class AccountService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'account';
    }
}
