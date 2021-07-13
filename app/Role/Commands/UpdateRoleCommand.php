<?php

namespace App\Role\Commands;

use App\Role\Role;

class UpdateRoleCommand
{
    public function __invoke(array $params, int $id)
    {
        Role::findOrFail($id)->update($params);
    }
}