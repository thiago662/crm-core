<?php

namespace App\Interest\Queries;

use App\Interest\Interest;

class FindInterestQuery
{
    public function __invoke($id)
    {
        Interest::find($id);
    }
}
