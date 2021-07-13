<?php

namespace App\Role\Queries;

use App\Role\Role;

class ListRoleQuery
{
    public function __invoke(array $params)
    {
        return Role::paginate($params['per_page'] ?? 15);
    }
}
