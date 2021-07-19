<?php

namespace App\Contact;

use Illuminate\Support\Facades\Facade;

class ContactService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'contact';
    }
}
