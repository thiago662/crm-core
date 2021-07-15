<?php

namespace App\Contact;

use Illuminate\Http\Request;
use App\Contact\Queries\ListContactQuery;
use App\Contact\Commands\CreateContactCommand;

class ContactService
{
    public static function listContact(Request $request)
    {
        return (new ListContactQuery())($request);
    }

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
        return (new UpdateContactCommand())($request, $id);
    }

    public static function deleteContact($id)
    {
        return (new DeleteContactCommand())($id);
    }
}
