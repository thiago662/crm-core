<?php

namespace App\User\Commands;

use App\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateUserCommand
{
    public function __invoke(Request $request, int $id)
    {
        $user = User::findOrFail($id);

        if ($request->get('password')) {
            $request->merge([
                'password' => Hash::make($request->password),
            ]);
        }

        $user->update($request->all());
    }
}
