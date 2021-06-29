<?php

namespace App\Account;

use Illuminate\Http\Request;
use App\Account\Queries\ListAccountQuery;
use App\Account\Queries\FindAccountQuery;
use App\Account\Commands\CreateAccountCommand;
use App\Account\Commands\UpdateAccountCommand;
use App\Account\Commands\DeleteAccountCommand;

class AccountService
{
    public static function listAccount(Request $request)
    {
        return (new ListAccountQuery())($request);
    }

    public static function createAccount(Request $request)
    {
        return (new CreateAccountCommand())($request);
    }

    public static function findAccount($id)
    {
        return (new FindAccountQuery())($id);
    }

    public static function updateAccount(Request $request, $id)
    {
        return (new UpdateAccountCommand())($request, $id);
    }

    public static function deleteAccount($id)
    {
        return (new DeleteAccountCommand())($id);
    }
}
