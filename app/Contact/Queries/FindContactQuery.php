<?php

namespace App\Contact\Queries;

use App\Contact\Contact;

class FindContactQuery
{
    public function __invoke($id)
    {
        return Contact::with([
            'account',
            'user',
            'origin',
            'followUps' => function ($query) {
                $query->with(['interests']);
            },
        ])->find($id);
    }
}
