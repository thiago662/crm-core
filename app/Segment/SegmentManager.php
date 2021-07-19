<?php

namespace App\Segment;

use Illuminate\Http\Request;
use App\Segment\Queries\ListSegmentQuery;
use App\Segment\Queries\FindSegmentQuery;
use App\Segment\Commands\CreateSegmentCommand;
use App\Segment\Commands\UpdateSegmentCommand;
use App\Segment\Commands\DeleteSegmentCommand;
use App\Segment\Queries\ListOptionSegmentQuery;

class SegmentManager
{
    public static function listSegment(Request $request)
    {
        return (new ListSegmentQuery())($request);
    }

    public static function createSegment(Request $request)
    {
        return (new CreateSegmentCommand())($request);
    }

    public static function findSegment($id)
    {
        return (new FindSegmentQuery())($id);
    }

    public static function updateSegment(Request $request, $id)
    {
        return (new UpdateSegmentCommand())($request, $id);
    }

    public static function deleteSegment($id)
    {
        return (new DeleteSegmentCommand())($id);
    }

    public static function listOptionSegment()
    {
        return (new ListOptionSegmentQuery())();
    }
}
