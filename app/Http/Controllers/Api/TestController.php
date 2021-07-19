<?php

namespace App\Http\Controllers\Api;

use App\Test\TestService;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function show()
    {
        return TestService::printTest();
    }
}
