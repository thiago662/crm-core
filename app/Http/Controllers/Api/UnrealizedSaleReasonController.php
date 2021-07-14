<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UnrealizedSaleReason\UnrealizedSaleReasonService;

class UnrealizedSaleReasonController extends Controller
{
    public function index(Request $request)
    {
        return UnrealizedSaleReasonService::listUnrealizedSaleReason($request);
    }

    public function store(Request $request)
    {
        return UnrealizedSaleReasonService::createUnrealizedSaleReason($request);
    }

    public function show($id)
    {
        return UnrealizedSaleReasonService::findUnrealizedSaleReason($id);
    }

    public function update(Request $request, $id)
    {
        return UnrealizedSaleReasonService::updateUnrealizedSaleReason($request, $id);
    }

    public function destroy($id)
    {
        return UnrealizedSaleReasonService::deleteUnrealizedSaleReason($id);
    }

    public function options()
    {
        return UnrealizedSaleReasonService::listOptionUnrealizedSaleReason();
    }
}
