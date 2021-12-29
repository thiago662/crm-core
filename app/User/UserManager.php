<?php

namespace App\User;

use Illuminate\Http\Request;
use App\User\Queries\ListUserQuery;
use App\User\Queries\FindUserQuery;
use App\User\Commands\CreateUserCommand;
use App\User\Commands\DeleteUserCommand;
use App\User\Commands\UpdateUserCommand;
use App\User\Queries\ListOptionUserQuery;
use App\User\Queries\FindProfileUserQuery;

class UserManager
{
    public static function listUser(Request $request)
    {
        return (new ListUserQuery())($request);
    }

    public static function createUser(Request $request)
    {
        return (new CreateUserCommand())($request);
    }

    public static function FindUser(int $id)
    {
        return (new FindUserQuery())($id);
    }

    public static function updateUser(Request $request, int $id)
    {
        return (new UpdateUserCommand())($request, $id);
    }

    public static function deleteUser(int $id)
    {
        return (new DeleteUserCommand())($id);
    }

    public static function listOptionUser()
    {
        return (new ListOptionUserQuery())();
    }

    public static function findProfileUser(Request $request)
    {
        return (new FindProfileUserQuery())($request);
    }
}
