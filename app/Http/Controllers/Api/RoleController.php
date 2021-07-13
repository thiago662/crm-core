<?php

namespace App\Http\Controllers\Api;

use App\Role\RoleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        return RoleService::listRole($request);
    }

    public function store(Request $request)
    {
        return RoleService::createRole($request);
    }

    public function show($id)
    {
        return RoleService::findRole($id);
    }

    public function update(Request $request, $id)
    {
        return RoleService::updateRole($request, $id);
    }

    public function destroy($id)
    {
        return RoleService::deleteRole($id);
    }

    public function options()
    {
        return RoleService::listOptionRole();
    }
}
