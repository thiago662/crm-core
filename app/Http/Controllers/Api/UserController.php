<?php

namespace App\Http\Controllers\Api;

use App\User\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return UserService::listUser($request);
    }

    public function store(Request $request)
    {
        return UserService::createUser($request);
    }

    public function show(int $id)
    {
        return UserService::FindUser($id);
    }

    public function update(Request $request, int $id)
    {
        return UserService::updateUser($request, $id);
    }

    public function destroy(int $id)
    {
        return UserService::deleteUser($id);
    }

    public function options()
    {
        return UserService::listOptionUser();
    }

    public function profile(Request $request)
    {
        return UserService::findProfileUser($request);
    }
}
