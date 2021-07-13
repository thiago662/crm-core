<?php

namespace App\Role\Commands;

use App\Role\Role;

class DeleteRoleCommand
{
    public function __invoke(int $id)
    {
        Role::findOrFail($id)->delete();
    }
}