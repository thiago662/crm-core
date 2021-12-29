<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Interest\InterestService;
use App\Http\Controllers\Controller;

class InterestController extends Controller
{
    public function index(Request $request)
    {
        return InterestService::listInterest($request);
    }

    public function store(Request $request)
    {
        return InterestService::createInterest($request);
    }

    public function show($id)
    {
        return InterestService::findInterest($id);
    }

    public function update(Request $request, $id)
    {
        return InterestService::updateInterest($request, $id);
    }

    public function destroy($id)
    {
        return InterestService::deleteInterest($id);
    }

    public function options()
    {
        return InterestService::listOptionInterest();
    }
}
