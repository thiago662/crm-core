<?php

namespace App\Contact;

use Illuminate\Support\Facades\Facade;

/**
 * Facade de Overflow.
 *
 * @package App\Contact
 * @method  static void listContact()
 */
class ContactService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'contact';
    }
}
