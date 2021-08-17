<?php

namespace App\Origin;

use Illuminate\Support\Facades\Facade;

/**
 * Facade de Teste.
 *
 * @package App\Origin
 * @method  static mixed listOptionOrigin()
 */
class OriginService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'origin';
    }
}
