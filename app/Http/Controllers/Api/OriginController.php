<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Origin\OriginService;
use App\Http\Controllers\Controller;

class OriginController extends Controller
{
    public function index(Request $request)
    {
        return OriginService::listOrigin($request);
    }

    public function store(Request $request)
    {
        return OriginService::createOrigin($request);
    }

    public function show($id)
    {
        return OriginService::findOrigin($id);
    }

    public function update(Request $request, $id)
    {
        return OriginService::updateOrigin($request, $id);
    }

    public function destroy($id)
    {
        return OriginService::deleteOrigin($id);
    }

    public function options()
    {
        return OriginService::listOptionOrigin();
    }
}
