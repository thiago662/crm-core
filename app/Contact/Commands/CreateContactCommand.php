<?php

namespace App\Contact\Commands;

use App\Contact\Contact;
use Illuminate\Http\Request;

class CreateContactCommand
{
    public function __invoke(Request $request)
    {
        $user = $request->user();

        $request->merge([
            'user_id' => $user->id,
            'account_id' => $user->account_id
        ]);

        Contact::create($request->toArray());
    }
}
