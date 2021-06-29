<?php

namespace App\Role;

use Illuminate\Http\Request;
use App\Role\Queries\ListRoleQuery;
use App\Role\Queries\FindRoleQuery;
use App\Role\Commands\CreateRoleCommand;
use App\Role\Commands\UpdateRoleCommand;
use App\Role\Commands\DeleteRoleCommand;

class RoleService
{
    public static function listRole(Request $request)
    {
        return (new ListRoleQuery())($request);
    }

    public static function createRole(Request $request)
    {
        return (new CreateRoleCommand())($request);
    }

    public static function findRole($id)
    {
        return (new FindRoleQuery())($id);
    }

    public static function updateRole(Request $request, $id)
    {
        return (new UpdateRoleCommand())($request, $id);
    }

    public static function deleteRole($id)
    {
        return (new DeleteRoleCommand())($id);
    }
}
