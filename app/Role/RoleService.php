<?php

namespace App\Role;

use Illuminate\Support\Facades\Facade;

class RoleService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'role';
    }
}
