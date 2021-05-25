<?php

namespace App\User\Queries;

use App\User\User;
use Illuminate\Http\Request;

class FindProfileUserQuery
{
    public function __invoke(Request $request)
    {
        return $request->user();
    }
}
