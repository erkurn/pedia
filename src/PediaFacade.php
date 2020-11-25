<?php

namespace Erkurn\Pedia;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Erkurn\Pedia\Pedia
 */
class PediaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pedia';
    }
}
