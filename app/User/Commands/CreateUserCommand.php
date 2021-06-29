<?php

namespace App\User\Commands;

use App\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand
{
    public function __invoke(Request $request)
    {
        $request->merge([
            'account_id' => $request->user()->account_id,
            'password' => Hash::make($request->password),
        ]);

        User::create($request->all());
    }
}
