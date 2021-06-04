<?php

namespace App\User\Queries;

use App\User\User;
use Illuminate\Http\Request;

class ListUserQuery
{
    public function __invoke(Request $request)
    {
        $user = auth()->user();

        // with(['posts' => function ($query) {
        //     $query->where('title', 'like', '%code%');
        // }])

        return User::with(['interests', 'role', 'account'])->where('account_id', $user->account_id)
            ->where('id', '<>', $user->id)
            ->paginate($request->get('per_page', 15));
    }
}
