<?php

namespace App\Contact\Commands;

use App\Contact\Contact;
use App\FollowUp\Dictionaries\TypeDictionary;
use App\User\Dictionaries\RoleDictionary;
use Illuminate\Http\Request;

class CreateContactCommand
{
    /**
     * Criar contato.
     *
     * @param Request $request
     * @return void
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();

        if ($user->role_id == RoleDictionary::ATTENDANT) {
            $request->merge([
                'user_id' => $user->id,
            ]);
        }

        $request->merge([
            'account_id' => $user->account_id,
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
            'type' => TypeDictionary::CREATE,
            'user_id' => $user->id,
        ];

        Contact::create($contact)
            ->followUps()
            ->create($followUp)
            ->interests()
            ->sync($request->get('interest_id'));
    }
}
