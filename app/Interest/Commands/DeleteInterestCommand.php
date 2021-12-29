<?php

namespace App\Interest\Commands;

use App\Interest\Interest;

class DeleteInterestCommand
{
    public function __invoke($id)
    {
        Interest::find($id)
            ->delete();
    }
}
