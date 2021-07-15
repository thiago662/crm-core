<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Contact\ContactService;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return ContactService::listContact($request);
    }

    public function store(Request $request)
    {
        return ContactService::createContact($request);
    }

    public function show($id)
    {
        return ContactService::findContact($id);
    }

    public function update(Request $request, $id)
    {
        return ContactService::updateContact($request, $id);
    }

    public function destroy($id)
    {
        return ContactService::deleteContact($id);
    }
}
