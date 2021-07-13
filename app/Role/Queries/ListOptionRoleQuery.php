<?php

namespace App\Role\Queries;

use App\Role\Role;

class ListOptionRoleQuery
{
    public function __invoke()
    {
        return Role::where('status', 'true')->get();
    }
}
