<?php

namespace App\Role\Commands;

use App\Role\Role;

class CreateRoleCommand
{
    public function __invoke(array $params)
    {
        Role::create($params);
    }
}
