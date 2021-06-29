<?php

namespace App\User\Commands;

use App\User\User;

class DeleteUserCommand
{
    public function __invoke(int $id)
    {
        User::findOrFail($id)
            ->delete();
    }
}
