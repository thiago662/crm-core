<?php

namespace App\Contact\Queries;

use App\Contact\Contact;
use Illuminate\Http\Request;

class ListContactQuery
{
    public function __invoke(Request $request)
    {
        return Contact::with([
            'account',
            'user',
            'origin',
            'followUps',
        ])->paginate();
    }
}
