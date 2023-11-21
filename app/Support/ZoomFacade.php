<?php

namespace App\Support;

use Illuminate\Support\Facades\Facade;

class ZoomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zoom';
    }
}
