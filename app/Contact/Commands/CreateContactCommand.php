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

        $contact = [
            'name' => $request->get('name'),
            'cell' => $request->get('cell'),
            'email' => $request->get('email'),
            'user_code' => $request->get('user_code'),
            'account_id' => $request->get('account_id'),
            'user_id' => $request->get('user_id'),
            'origin_id' => $request->get('origin_id'),
        ];

        $followUp = [
            'type' => $request->get('type'),
            'user_id' => $request->get('user_id'),
        ];

        Contact::create($contact)
            ->followUp($followUp);
    }
}
