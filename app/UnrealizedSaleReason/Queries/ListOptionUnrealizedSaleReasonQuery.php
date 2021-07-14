<?php

namespace App\UnrealizedSaleReason\Queries;

use App\UnrealizedSaleReason\UnrealizedSaleReason;

class ListOptionUnrealizedSaleReasonQuery
{
    public function __invoke()
    {
        return UnrealizedSaleReason::where('status', 'true')->get();
    }
}
