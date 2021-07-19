<?php

namespace App\Role;

use Illuminate\Http\Request;
use App\Role\Queries\ListRoleQuery;
use App\Role\Queries\FindRoleQuery;
use App\Role\Commands\CreateRoleCommand;
use App\Role\Commands\UpdateRoleCommand;
use App\Role\Commands\DeleteRoleCommand;
use App\Role\Queries\ListOptionRoleQuery;

class RoleManager
{
    public static function listRole(Request $request)
    {
        return (new ListRoleQuery())($request->all());
    }

    public static function createRole(Request $request)
    {
        return (new CreateRoleCommand())($request->all());
    }

    public static function findRole($id)
    {
        return (new FindRoleQuery())($id);
    }

    public static function updateRole(Request $request, $id)
    {
        return (new UpdateRoleCommand())($request->all(), $id);
    }

    public static function deleteRole($id)
    {
        return (new DeleteRoleCommand())($id);
    }

    public static function listOptionRole()
    {
        return (new ListOptionRoleQuery())();
    }
}
