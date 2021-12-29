<?php

namespace App\Interest\Queries;

use App\Interest\Interest;
use Illuminate\Support\Facades\Auth;

class ListOptionInterestQuery
{
    public function __invoke()
    {
        $user = Auth::user();

        return Interest::where('account_id', $user->account_id)->get();
    }
}
