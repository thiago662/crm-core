<?php

namespace App\Interest\Commands;

use App\Interest\Interest;

class UpdateInterestCommand
{
    public function __invoke(array $param, int $id)
    {
        Interest::find($id)
            ->update($param);
    }
}
