<?php

namespace App\Segment;

use Illuminate\Support\Facades\Facade;

class SegmentService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'segment';
    }
}
