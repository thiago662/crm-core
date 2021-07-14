<?php

namespace App\UnrealizedSaleReason;

use Illuminate\Http\Request;

class UnrealizedSaleReasonService
{
    public static function listUnrealizedSaleReason(Request $request)
    {
        return (new ListUnrealizedSaleReasonQuery())($request);
    }

    public static function createUnrealizedSaleReason(Request $request)
    {
        return (new CreateUnrealizedSaleReasonCommand())($request);
    }

    public static function findUnrealizedSaleReason($id)
    {
        return (new FindUnrealizedSaleReasonQuery())($id);
    }

    public static function updateUnrealizedSaleReason(Request $request, $id)
    {
        return (new UpdateUnrealizedSaleReasonCommand())($request, $id);
    }

    public static function deleteUnrealizedSaleReason($id)
    {
        return (new DeleteUnrealizedSaleReasonCommand())($id);
    }

    public static function listOptionUnrealizedSaleReason()
    {
        return (new ListOptionUnrealizedSaleReasonQuery())();
    }
}
