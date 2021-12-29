<?php

namespace App\Interest\Queries;

use App\Interest\Interest;

class ListInterestQuery
{
    public function __invoke(array $param)
    {
        return Interest::paginate();
    }
}
