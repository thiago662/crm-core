<?php

namespace App\User\Queries;

use App\User\User;
use Illuminate\Support\Facades\Auth;

class ListOptionUserQuery
{
    public function __invoke()
    {
        $user = Auth::user();

        return User::where('account_id', $user->account_id)
            ->where('role_id', '<>', 1)
            ->get();
    }
}
