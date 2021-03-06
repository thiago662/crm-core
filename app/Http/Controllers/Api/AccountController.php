<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Account\AccountService;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        return AccountService::listAccount($request);
    }

    public function store(Request $request)
    {
        return AccountService::createAccount($request);
    }

    public function show($id)
    {
        return AccountService::findAccount($id);
    }

    public function update(Request $request, $id)
    {
        return AccountService::updateAccount($request, $id);
    }

    public function destroy($id)
    {
        return AccountService::deleteAccount($id);
    }
}
