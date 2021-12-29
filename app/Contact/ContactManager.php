<?php

namespace App\Contact;

use Illuminate\Http\Request;
use App\Contact\Queries\ListContactQuery;
use App\Contact\Commands\CreateContactCommand;
use App\Contact\Queries\FindContactQuery;

class ContactManager
{
    public static function listContact(Request $request)
    {
        return (new ListContactQuery())($request);
    }

    /**
     * Cria contato.
     *
     * @return void
     */
    public static function createContact(Request $request)
    {
        return (new CreateContactCommand())($request);
    }

    public static function findContact($id)
    {
        return (new FindContactQuery())($id);
    }

    public static function updateContact(Request $request, $id)
    {
        // return (new UpdateContactCommand())($request, $id);
    }

    public static function deleteContact($id)
    {
        // return (new DeleteContactCommand())($id);
    }
}
