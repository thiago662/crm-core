<?php

namespace App\Role\Queries;

use App\Role\Role;

class FindRoleQuery
{
    public function __invoke(int $id)
    {
        return Role::where('status', 'true')->findOrFail($id);
    }
}
