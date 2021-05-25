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
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function profile(Request $request)
    {
        return UserService::findProfileUser($request);
    }
}
