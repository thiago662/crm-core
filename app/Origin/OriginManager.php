<?php

namespace App\Origin;

use App\Origin\Queries\ListOptionOriginQuery;
use Illuminate\Http\Request;

class OriginManager
{
    public static function listOrigin(Request $request)
    {
        return (new ListOriginQuery())($request->all());
    }

    public static function createOrigin(Request $request)
    {
        return (new CreateOriginCommand())($request->all());
    }

    public static function findOrigin($id)
    {
        return (new FindOriginQuery())($id);
    }

    public static function updateOrigin(Request $request, $id)
    {
        return (new UpdateOriginCommand())($request->all(), $id);
    }

    public static function deleteOrigin($id)
    {
        return (new DeleteOriginCommand())($id);
    }

    public static function listOptionOrigin()
    {
        return (new ListOptionOriginQuery())();
    }
}
