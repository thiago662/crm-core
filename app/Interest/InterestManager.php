<?php

namespace App\Interest;

use Illuminate\Http\Request;
use App\Interest\Queries\ListInterestQuery;
use App\Interest\Commands\CreateInterestCommand;
use App\Interest\Commands\DeleteInterestCommand;
use App\Interest\Commands\UpdateInterestCommand;
use App\Interest\Queries\FindInterestQuery;
use App\Interest\Queries\ListOptionInterestQuery;

class InterestManager
{
    public static function listInterest(Request $request)
    {
        return (new ListInterestQuery())($request->all());
    }

    public static function createInterest(Request $request)
    {
        return (new CreateInterestCommand())($request->all());
    }

    public static function findInterest($id)
    {
        return (new FindInterestQuery())($id);
    }

    public static function updateInterest(Request $request, $id)
    {
        return (new UpdateInterestCommand())($request->all(), $id);
    }

    public static function deleteInterest($id)
    {
        return (new DeleteInterestCommand())($id);
    }

    public static function listOptionInterest()
    {
        return (new ListOptionInterestQuery())();
    }
}
