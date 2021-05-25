<?php

namespace App\User\Queries;

use App\User\User;
use Illuminate\Http\Request;

class ListUserQuery
{
    public function __invoke(Request $request)
    {
        return User::all();
    }
}
