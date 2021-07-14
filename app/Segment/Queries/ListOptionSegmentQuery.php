<?php

namespace App\Segment\Queries;

use App\Segment\Segment;

class ListOptionSegmentQuery
{
    public function __invoke()
    {
        return Segment::where('status', 'true')->get();
    }
}
