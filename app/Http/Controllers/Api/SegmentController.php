<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Segment\SegmentService;
use App\Http\Controllers\Controller;

class SegmentController extends Controller
{
    public function index(Request $request)
    {
        return SegmentService::listSegment($request);
    }

    public function store(Request $request)
    {
        return SegmentService::createSegment($request);
    }

    public function show($id)
    {
        return SegmentService::findSegment($id);
    }

    public function update(Request $request, $id)
    {
        return SegmentService::updateSegment($request, $id);
    }

    public function destroy($id)
    {
        return SegmentService::deleteSegment($id);
    }

    public function options($id)
    {
        return SegmentService::listOptionSegment($id);
    }
}
