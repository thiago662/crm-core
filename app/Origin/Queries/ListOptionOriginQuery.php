<?php

namespace App\Origin\Queries;

use App\Origin\Origin;

class ListOptionOriginQuery
{
    public function __invoke()
    {
        return Origin::where('status', 'true')->get();
    }
}
