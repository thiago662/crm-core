<?php

namespace App\User\Queries;

use App\User\User;

class FindUserQuery
{
    public function __invoke(int $id)
    {
        return User::with([
                'interests',
                'role',
                'account',
            ])
            ->findOrFail($id);
    }
}
